(window.webpackJsonpCMS=window.webpackJsonpCMS||[]).push([[18,22,43],{323:function(t,e,n){"use strict";n.r(e);var r=n(466),a=n(382);for(var s in a)"default"!==s&&function(t){n.d(e,t,function(){return a[t]})}(s);n(459);var o=n(0),i=Object(o.a)(a.default,r.a,r.b,!1,null,null,null);e.default=i.exports},339:function(t,e,n){"use strict";n.r(e);var r=n(613),a=n(429);for(var s in a)"default"!==s&&function(t){n.d(e,t,function(){return a[t]})}(s);n(584);var o=n(0),i=Object(o.a)(a.default,r.a,r.b,!1,null,null,null);e.default=i.exports},358:function(t,e,n){"use strict";n.r(e);var r=n(699),a=n(582);for(var s in a)"default"!==s&&function(t){n.d(e,t,function(){return a[t]})}(s);var o=n(0),i=Object(o.a)(a.default,r.a,r.b,!1,null,null,null);e.default=i.exports},362:function(e,t){function n(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?e.exports=n=function(t){return typeof t}:e.exports=n=function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},n(t)}e.exports=n},363:function(t,e,n){"use strict";var r=n(364);t.exports={props:{dataParams:{type:String,required:!0}},computed:{componentParams:function(){return r.componentParams(this.dataParams).success}}}},364:function(t,e,n){"use strict";var r=n(1);n(18),n(39);var a=r(n(362));e.componentParams=function(t){var e={success:null,error:null};if("string"==typeof t){var n=t.replace(/'/g,'"');try{e.success=JSON.parse(n)}catch(t){e.error={message:"Проблема при парсингу json-масива",e:t},console.log(t)}}else e.error={message:'Неочікуваний тип вхідних даних: очікую "string", передано "'.concat((0,a.default)(t),'"')};return e},e.staticParams=function(t){var e={success:null,error:null};if("string"==typeof t){var n=t.replace(/'/g,'"');try{e.success=JSON.parse(n)}catch(t){e.error={message:"Проблема при парсингу json-масива",e:t},console.log(t)}}else e.error={message:'Неочікуваний тип вхідних даних: очікую "string", передано "'.concat((0,a.default)(t),'"')};return e}},382:function(t,e,n){"use strict";n.r(e);var r=n(383),a=n.n(r);for(var s in r)"default"!==s&&function(t){n.d(e,t,function(){return r[t]})}(s);e.default=a.a},383:function(n,t,s){"use strict";(function(t){var e=s(1);s(12),s(9),s(6),s(32),s(13),s(14),s(10),s(7);var r=e(s(11));function a(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}n.exports={name:"TournamentsTabs",data:function(){return{currentTab:"tournaments"}},props:{tournamentsCounter:{type:Number,default:0},racesCounter:{type:Number,default:0}},computed:function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?a(Object(n),!0).forEach(function(t){(0,r.default)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):a(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},t("i18n",["i18n"]),{},t("appData",["platform"])),methods:{setTab:function(t){this.currentTab!==t&&(this.currentTab=t,this.$emit("set-tab",t))}}}}).call(this,s(2).mapGetters)},384:function(t,e,n){},429:function(t,e,n){"use strict";n.r(e);var r=n(430),a=n.n(r);for(var s in r)"default"!==s&&function(t){n.d(e,t,function(){return r[t]})}(s);e.default=a.a},430:function(n,t,s){"use strict";(function(t){var e=s(1);s(12),s(9),s(6),s(13),s(14),s(10),s(7);var r=e(s(11));function a(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}n.exports={name:"TournamentsPage",components:{tabs:s(323).default,rules:s(172).default,item:s(171).default},data:function(){return{isLoading:!0,chosenTab:"",tournaments:[],races:[],subtype:""}},props:{componentParams:{type:Object,default:function(){return{}}}},computed:function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?a(Object(n),!0).forEach(function(t){(0,r.default)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):a(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}({},t("appData",["isLogged"]),{activeTabTournaments:function(){return"view"===this.subtype?this.componentParams.tournaments:"tournaments"===this.chosenTab?this.tournaments:this.races},activeTournaments:function(){var t=this.getActiveCount(this.tournaments);this.isLogged&&(t-=this.getParticipatedCount(this.tournaments));return t},activeRaces:function(){var t=this.getActiveCount(this.races);this.isLogged&&(t-=this.getParticipatedCount(this.races));return t}}),beforeMount:function(){this.subtype=this.componentParams.subtype,this.componentParams.tournaments.length&&(this.tournaments=this.componentParams.tournaments.filter(function(t){return"money"===t.type}),this.races=this.componentParams.tournaments.filter(function(t){return"points"===t.type}))},mounted:function(){this.isLoading=!1,this.chosenTab="tournaments"},methods:{updateChosenTab:function(t){this.chosenTab=t},getActiveCount:function(t){return t.filter(function(t){return"active"===t.status}).length},getParticipatedCount:function(t){return t.filter(function(t){return null!==t.standing}).length}}}}).call(this,s(2).mapGetters)},431:function(t,e,n){},459:function(t,e,n){"use strict";var r=n(384);n.n(r).a},466:function(t,e,n){"use strict";n.d(e,"a",function(){return r}),n.d(e,"b",function(){return a});var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"tournaments-tabs navigation"},[n("div",{staticClass:"tournaments-tabs__holder navigation__items"},[n("div",{staticClass:"tournaments-tabs__item navigation__item",class:{active:"tournaments"===e.currentTab},on:{click:function(t){return e.setTab("tournaments")}}},[n("div",{staticClass:"navigation__link"},[n("div",{staticClass:"navigation__text"},[e._v(e._s(e.i18n.t("tournaments","Tournaments"))),e.tournamentsCounter?n("div",{staticClass:"notification-counter",class:"notification-counter--"+e.platform},[e._v(e._s(e.tournamentsCounter))]):e._e()])])]),n("div",{staticClass:"tournaments-tabs__item navigation__item",class:{active:"races"===e.currentTab},on:{click:function(t){return e.setTab("races")}}},[n("div",{staticClass:"navigation__link"},[n("div",{staticClass:"navigation__text"},[e._v(e._s(e.i18n.t("tournaments","Races"))),e.racesCounter?n("div",{staticClass:"notification-counter",class:"notification-counter--"+e.platform},[e._v(e._s(e.racesCounter))]):e._e()])])])])])},a=[]},582:function(t,e,n){"use strict";n.r(e);var r=n(583),a=n.n(r);for(var s in r)"default"!==s&&function(t){n.d(e,t,function(){return r[t]})}(s);e.default=a.a},583:function(t,e,n){"use strict";t.exports={mixins:[n(363)],name:"Tournaments",components:{page:n(339).default,widget:n(179).default},beforeCreate:function(){window.VuexModules.games||(this.$store.registerModule("games",n(165)),window.VuexModules.games=!0),window.VuexModules["games/list"]||(this.$store.registerModule(["games","list"],n(227)),window.VuexModules["games/list"]=!0)}}},584:function(t,e,n){"use strict";var r=n(431);n.n(r).a},613:function(t,e,n){"use strict";n.d(e,"a",function(){return r}),n.d(e,"b",function(){return a});var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"tournaments-page"},[e.isLoading?[n("div",{staticClass:"tournaments-page__loading"})]:[e.races.length&&"index"===e.subtype?n("tabs",{attrs:{"tournaments-counter":e.activeTournaments,"races-counter":e.activeRaces},on:{"set-tab":e.updateChosenTab}}):e._e(),"index"===e.subtype?n("rules",{attrs:{"rules-category":e.chosenTab}}):e._e(),e._l(e.activeTabTournaments,function(t){return n("item",{key:"tournament-"+t.id,attrs:{tournament:t,subtype:e.subtype}})})]],2)},a=[]},699:function(t,e,n){"use strict";n.d(e,"a",function(){return r}),n.d(e,"b",function(){return a});var r=function(){var t=this,e=t.$createElement;return(t._self._c||e)(t.componentParams.template,{ref:t.componentParams.template,tag:"component",attrs:{"component-params":t.componentParams}})},a=[]}}]);