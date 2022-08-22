(this.webpackJSONPwpmdb=this.webpackJSONPwpmdb||[]).push([[10],{812:function(e,t,a){"use strict";a.r(t),a.d(t,"MSTMessages",function(){return N}),a.d(t,"MSBlurb",function(){return M}),a.d(t,"MSContent",function(){return S});var n=a(10),s=a(36),i=a(0),r=a.n(i),l=a(20),c=a.n(l),u=a(124),m=a.n(u),o=a(6),b=a(12),p=a.n(b),d=a(1),f=a(43),g=a(80),O=a(84),j=a(226),v=function(e){var t=Object(o.d)(),a=Object(o.e)(function(e){return e.migrations}),n=Object(o.e)(function(e){return e.multisite_tools}),s=a.local_site,i=a.remote_site,l=a.current_migration.intent,c=s.subsites,u=["push","pull"].includes(l)?i.site_details.subsites:{},m=c;"false"===s.site_details.is_multisite&&(m=u);return r.a.createElement("select",{onChange:function(e){if("0"!==e.target.value){t({type:g.f,payload:e.target.value});var a=Object(j.a)(e.target.value,s,i,l);if(!a.subsiteName)return!1;t(Object(O.d)({selectedSubsite:a.subsiteName,selectedSubsiteID:e.target.value}))}},value:n.selected_subsite,className:"consolas",id:"wpmdb-multisite-selector"},r.a.createElement("option",{value:"0"},"-- ",Object(d.a)("Select a subsite","wp-migrate-db")," --"),Object.keys(m).map(function(e,t){return r.a.createElement("option",{value:e,key:t},Object.values(m)[t])}))},_=(a(616),function(e){var t=Object(o.e)(function(e){return e.migrations}).current_migration.intent,a=e.newPrefix;return"savefile"===t&&(a=r.a.createElement(r.a.Fragment,null,r.a.createElement("input",{type:"text",className:"new-prefix-input",value:a,onChange:e.handler}))),r.a.createElement("div",{className:"new-prefix".concat("savefile"===t?" has-form":"")},r.a.createElement("span",null,Object(d.a)("New table name prefix: ")),a)}),E=a(7),h=a(225),w=["localURL","remoteURL","localIsMultisite"],N=function(e){return{pull:e?Object(d.a)("Pull into a specific subsite","wp-migrate-db"):Object(d.a)("Pull from a specific subsite","wp-migrate-db"),push:e?Object(d.a)("Push a specific subsite","wp-migrate-db"):Object(d.a)("Push to a specific subsite","wp-migrate-db"),savefile:Object(d.a)("Export a subsite as a single site install","wp-migrate-db"),find_replace:Object(d.a)("Run a find/replace on a specific subsite","wp-migrate-db")}},M=function(e){e.localURL;var t=e.remoteURL,a=e.localIsMultisite,n=Object(s.a)(e,w),i=a?Object(d.a)("The local site is a multisite install of WordPress but remote site <b>%s</b> a single-site install.","wp-migrate-db"):Object(d.a)("The remote site <b>%s</b> is a multisite install of WordPress but this is a single-site install.","wp-migrate-db"),l=Object(d.c)(i,Object(E.r)(t));return r.a.createElement("p",{className:n.className},p()(l))},S=function(){var e=Object(i.useState)(!1),t=Object(n.a)(e,2),a=t[0],s=t[1],l=Object(o.d)(),c=Object(o.e)(function(e){return e.migrations}),u=Object(o.e)(function(e){return e.multisite_tools}),b=c.current_migration,p=c.local_site,f=c.remote_site,j=b.status;if(u.versionMismatch)return null;var E=function(e){var t=[],n=m()(e,{name:"MST_NO_SUBSITE"});return(m()(e,{name:"MST_EMPTY_PREFIX"})||a)&&t.push(r.a.createElement("p",{className:"red"},r.a.createElement("strong",null,Object(d.a)("Error: ","wp-migrate-db")),Object(d.a)("Please enter a valid prefix. Letters, numbers and underscores (_) are allowed.","wp-migrate-db"))),n&&t.push(r.a.createElement("p",{className:"red"},r.a.createElement("strong",null,Object(d.a)("Error: ","wp-migrate-db")),Object(d.a)("Please select a subsite.","wp-migrate-db"))),t}(j),h=b.intent;return r.a.createElement(r.a.Fragment,null,["push","pull"].includes(h)&&r.a.createElement(M,{localURL:p.this_url,remoteURL:f.site_details.home_url,localIsMultisite:"true"===p.is_multisite,className:"mst-blurb"}),r.a.createElement("div",{className:"select-subsite-wrap"},r.a.createElement("span",{className:"checkbox-wrap"},r.a.createElement("input",{type:"checkbox",name:"enable-mst",id:"enable-mst",checked:u.enabled,onChange:function(e){l(Object(O.j)())}})),r.a.createElement("div",{className:"subsite-selector"},r.a.createElement("label",{htmlFor:"enable-mst"},N("true"===p.is_multisite)[h]),u.enabled&&r.a.createElement(r.a.Fragment,null,r.a.createElement(v,null),r.a.createElement(_,{handler:function(e){s(!1);var t=e.target.value;!function(e){return null===new RegExp("[^a-z0-9_]","i").exec(e)}(t)?s(!0):l({type:g.b,payload:t})},newPrefix:u.new_prefix})),E.length>0&&r.a.createElement("div",{className:"mst-errors"},E.map(function(e,t){return r.a.createElement(r.a.Fragment,{key:t},e)})))))},P=function(e){e.disabled;var t=Object(o.e)(function(e){return e}).multisite_tools,a=Object(o.e)(function(e){return e.panels.panelsOpen}),n=Object(o.e)(function(e){return e.migrations}),s=n.local_site,i=n.remote_site,l=n.current_migration,u=s.mst_version,m=l.intent;if(t.versionMismatch)return r.a.createElement(h.a,{message:t.message,pluginSlug:"wp-migrate-db-pro-multisite-tools",remoteUpgradable:t.remoteUpgradable,version:u,shortName:O.c});if(c()(a,"multisite_tools")||!t.enabled)return null;var b=Object(j.a)(t.selected_subsite,s,i,m);return b?r.a.createElement("div",null,b.subsiteName):null};t.default=function(){var e=!1,t=Object(o.e)(function(e){return e.panels.panelsOpen}),a=Object(o.e)(function(e){return e}).multisite_tools,n=!1,s="mst";return!t.includes("multisite_tools")&&a.enabled&&0!==a.selected_subsite&&(n=!0),a.enabled&&0!==a.selected_subsite&&!a.versionMismatch||(s+=" no-summary"),a.versionMismatch&&(e=!0,n=!1),r.a.createElement(f.a,{title:Object(d.a)("Multisite","wp-migrate-db"),className:s,forceDivider:n,panelName:"multisite_tools",disabled:e,panelSummary:r.a.createElement(P,{disabled:e}),hideArrow:a.versionMismatch},r.a.createElement(S,null))}}}]);