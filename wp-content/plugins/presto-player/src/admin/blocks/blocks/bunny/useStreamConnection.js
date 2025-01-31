const { __ } = wp.i18n;
const { useState } = wp.element;
const baseUrl = `${prestoPlayer.root}${prestoPlayer.prestoVersionString}bunny/stream/`;

export default (onRefetch) => {
  const [apikey, setApikey] = useState("");
  const [saveMessage, setSaveMessage] = useState("");
  const [saving, setSaving] = useState(false);
  const [step, setStep] = useState(0);
  const [error, setError] = useState("");

  const getError = (errorString) => {
    if (errorString.includes("Authorization has been denied")) {
      return "Your API key is incorrect. Please double-check to make sure you've copied it correctly.";
    }
    if (errorString.includes("localhost")) {
      return "You cannot use a CDN on a local site. Please use Bunny.net on a live, publicly accessible site.";
    }
    return errorString;
  };

  const saveKey = async () => {
    setError("");

    try {
      setSaving(true);
      setStep(0);
      setSaveMessage(__("Validating API Key...", "presto-player"));
      const { success } = await wp.apiFetch({
        url: `${baseUrl}api-key`,
        method: "POST",
        data: {
          api_key: apikey,
        },
      });

      if (!success) {
        throw {
          message:
            "Could not save the API key. Please double check it to make sure it's correct.",
        };
      }
    } catch (e) {
      setStep(0);
      setError(
        e?.message
          ? getError(e.message)
          : "Something went wrong. Please try again"
      );
      return;
    } finally {
      setStep(1);
      setSaving(false);
      setSaveMessage("");
    }

    // public library
    try {
      setSaving(true);
      setSaveMessage(
        __(
          "Setting up public video library. This make take a few moments...",
          "presto-player"
        )
      );
      const { id } = await wp.apiFetch({
        url: `${baseUrl}library`,
        method: "POST",
        data: {
          type: "public",
        },
      });
    } catch (e) {
      setStep(0);
      setError(
        e?.message
          ? getError(e.message)
          : "Something went wrong. Please try again"
      );
      return;
    } finally {
      setStep(2);
      setSaving(false);
      setSaveMessage("");
    }

    // private library
    try {
      setSaving(true);
      setSaveMessage(
        __(
          "Setting up private video library. This make take a few moments...",
          "presto-player"
        )
      );
      await wp.apiFetch({
        url: `${baseUrl}library`,
        method: "POST",
        data: {
          type: "private",
        },
      });
    } catch (e) {
      setStep(0);
      setError(
        e?.message
          ? getError(e.message)
          : "Something went wrong. Please try again"
      );
      return;
    } finally {
      setStep(2);
      setSaving(false);
      setSaveMessage("");
    }

    onRefetch();
  };

  const totalSteps = 3;

  return { saveKey, setApikey, step, saveMessage, saving, error, totalSteps };
};
