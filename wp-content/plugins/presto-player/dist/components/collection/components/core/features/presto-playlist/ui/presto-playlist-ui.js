import{h}from"@stencil/core";export class PrestoPlayListUI{render(){return h("div",{key:"e491b728a12bbe88b47ab93e76eaea8237dd3cea",class:"playlist__base",part:"base"},h("div",{key:"672c71c6e0b425ea093c4395cb86f106cc4f2785",class:"playlist"},h("div",{key:"f785f31695ada6ffa3cc62413d8f739605ceb9e7",class:"playlist__preview"},h("slot",{key:"636b6374490405d59b2c6d1f226942e1d75056dc",name:"preview"})),h("div",{key:"f3b0fac78923018568c53b7d8dd753a012f86332",class:"playlist__info"},h("div",{key:"d343092dda7a695530dee464a9f72fcd0f4a2738",class:"playlist__heading"},h("div",{key:"70cd1f9a9d8f0b4ad972e9886dbced212492b52f",class:"playlist__heading-title"},h("slot",{key:"949df1a54f703e886e8204407b3b651088bfcc01",name:"title"})),h("div",{key:"c1969328b820129132fdb0045864440c568d24fe",class:"playlist__heading-count"},h("slot",{key:"47a163b788d1619ad130bd6ef62855681699d914",name:"count"}))),h("div",{key:"e368d3e86d468053bdb754f326c6b2386f12e568",class:"playlist__info--inner"},h("div",{key:"42976f9e474ec11c7dce1664449f380791a4995a",class:"playlist__list"},h("slot",{key:"f3265b3ed5c8e08ed1e796cbce1b17fb165ce545",name:"list"}))))))}static get is(){return"presto-playlist-ui"}static get encapsulation(){return"shadow"}static get originalStyleUrls(){return{$:["presto-playlist-ui.scss"]}}static get styleUrls(){return{$:["presto-playlist-ui.css"]}}}