var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/wiki/load.php"});mw.loader.register([["site","1427275691",[],"site"],["noscript","1427275691",[],"noscript"],["filepage","1427275691"],["user.groups","1427275691",[],"user"],["user","1427275691",[],"user"],[
"user.cssprefs","1457967105",["mediawiki.user"],"private"],["user.options","1457967105",[],"private"],["user.tokens","1427275670",[],"private"],["mediawiki.language.data","1427275691",["mediawiki.language.init"]],["mediawiki.skinning.elements","1427275691"],["mediawiki.skinning.content","1427275691"],["mediawiki.skinning.interface","1427275691"],["mediawiki.skinning.content.parsoid","1427275691"],["mediawiki.skinning.content.externallinks","1427275691"],["jquery.accessKeyLabel","1427275766",["jquery.client","jquery.mwExtension"]],["jquery.appear","1427275691"],["jquery.arrowSteps","1427275691"],["jquery.async","1427275691"],["jquery.autoEllipsis","1427275691",["jquery.highlightText"]],["jquery.badge","1427275691",["mediawiki.language"]],["jquery.byteLength","1427275691"],["jquery.byteLimit","1427275691",["jquery.byteLength"]],["jquery.checkboxShiftClick","1427275691"],["jquery.chosen","1427275691"],["jquery.client","1427275691"],["jquery.color","1427275691",["jquery.colorUtil"]],[
"jquery.colorUtil","1427275691"],["jquery.confirmable","1427275691",["mediawiki.jqueryMsg"]],["jquery.cookie","1427275692"],["jquery.expandableField","1427275692"],["jquery.farbtastic","1427275692",["jquery.colorUtil"]],["jquery.footHovzer","1427275692"],["jquery.form","1427275692"],["jquery.fullscreen","1427275692"],["jquery.getAttrs","1427275692"],["jquery.hidpi","1427275692"],["jquery.highlightText","1427275692",["jquery.mwExtension"]],["jquery.hoverIntent","1427275692"],["jquery.json","1427275692"],["jquery.localize","1427275692"],["jquery.makeCollapsible","1427275730"],["jquery.mockjax","1427275692"],["jquery.mw-jump","1427275692"],["jquery.mwExtension","1427275692"],["jquery.placeholder","1427275692"],["jquery.qunit","1427275692"],["jquery.qunit.completenessTest","1427275692",["jquery.qunit"]],["jquery.spinner","1427275692"],["jquery.jStorage","1427275692",["json"]],["jquery.suggestions","1427275692",["jquery.highlightText"]],["jquery.tabIndex","1427275692"],["jquery.tablesorter"
,"1449516915",["jquery.mwExtension","mediawiki.language.months"]],["jquery.textSelection","1427275692",["jquery.client"]],["jquery.throttle-debounce","1427275692"],["jquery.validate","1427275692"],["jquery.xmldom","1427275692"],["jquery.tipsy","1427275692"],["jquery.ui.core","1427275692",[],"jquery.ui"],["jquery.ui.accordion","1427275692",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1427275692",["jquery.ui.menu"],"jquery.ui"],["jquery.ui.button","1427275692",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1427275692",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1427275692",["jquery.ui.button","jquery.ui.draggable","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.draggable","1427275692",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.droppable","1427275692",["jquery.ui.draggable"],"jquery.ui"],["jquery.ui.menu","1427275692",["jquery.ui.core","jquery.ui.position","jquery.ui.widget"],
"jquery.ui"],["jquery.ui.mouse","1427275692",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1427275692",[],"jquery.ui"],["jquery.ui.progressbar","1427275692",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.resizable","1427275692",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1427275692",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.slider","1427275692",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1427275692",["jquery.ui.core","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.spinner","1427275692",["jquery.ui.button"],"jquery.ui"],["jquery.ui.tabs","1427275692",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.tooltip","1427275692",["jquery.ui.core","jquery.ui.position","jquery.ui.widget"],"jquery.ui"],["jquery.ui.widget","1427275692",[],"jquery.ui"],["jquery.effects.core","1427275692",[],"jquery.ui"],["jquery.effects.blind","1427275692",["jquery.effects.core"],"jquery.ui"],[
"jquery.effects.bounce","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1427275692",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1427275692",["jquery.effects.core"],"jquery.ui"],["json","1427275692",[],null,"local",
"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment","1427275692"],["mediawiki.api","1427275692",["mediawiki.util"]],["mediawiki.api.category","1427275692",["mediawiki.Title","mediawiki.api"]],["mediawiki.api.edit","1427275692",["mediawiki.Title","mediawiki.api","user.tokens"]],["mediawiki.api.login","1427275692",["mediawiki.api"]],["mediawiki.api.parse","1427275692",["mediawiki.api"]],["mediawiki.api.watch","1427275692",["mediawiki.api","user.tokens"]],["mediawiki.content.json","1427275692"],["mediawiki.debug","1427275692",["jquery.footHovzer","jquery.tipsy"]],["mediawiki.debug.init","1427275692",["mediawiki.debug"]],["mediawiki.feedback","1427275692",["jquery.ui.dialog","mediawiki.api.edit","mediawiki.jqueryMsg"]],["mediawiki.hidpi","1427275692",["jquery.hidpi"],null,"local","return'srcset'in new Image();"],["mediawiki.hlist","1427275692",["jquery.client"]],["mediawiki.htmlform","1452203762",["jquery.mwExtension"]],["mediawiki.icon","1427275692"],[
"mediawiki.inspect","1427275692",["jquery.byteLength","json"]],["mediawiki.notification","1427275692",["mediawiki.page.startup"]],["mediawiki.notify","1427275692"],["mediawiki.pager.tablePager","1427275692"],["mediawiki.searchSuggest","1427275730",["jquery.placeholder","jquery.suggestions","mediawiki.api"]],["mediawiki.Title","1427275692",["jquery.byteLength","mediawiki.util"]],["mediawiki.toc","1427275730",["jquery.cookie"]],["mediawiki.Uri","1427275692",["mediawiki.util"]],["mediawiki.user","1427275692",["jquery.cookie","mediawiki.api","user.options","user.tokens"]],["mediawiki.util","1427275692",["jquery.accessKeyLabel","mediawiki.notify"]],["mediawiki.cookie","1427275692",["jquery.cookie"]],["mediawiki.action.edit","1427275692",["jquery.byteLimit","jquery.textSelection","mediawiki.action.edit.styles","mediawiki.action.edit.toolbar"]],["mediawiki.action.edit.styles","1427275692"],["mediawiki.action.edit.toolbar","1427275692"],["mediawiki.action.edit.collapsibleFooter","1427275692",[
"jquery.cookie","jquery.makeCollapsible","mediawiki.icon"]],["mediawiki.action.edit.preview","1427275692",["jquery.form","jquery.spinner","mediawiki.action.history.diff"]],["mediawiki.action.history","1427275692",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1427275692",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1427275692",["mediawiki.page.startup"]],["mediawiki.action.view.metadata","1427275692"],["mediawiki.action.view.postEdit","1427275730",["mediawiki.cookie","mediawiki.jqueryMsg"]],["mediawiki.action.view.redirect","1427275692",["jquery.client"]],["mediawiki.action.view.redirectPage","1427275692"],["mediawiki.action.view.rightClickEdit","1427275692"],["mediawiki.action.edit.editWarning","1438933977",["jquery.textSelection","mediawiki.jqueryMsg"]],["mediawiki.language","1427275730",["mediawiki.cldr","mediawiki.language.data"]],["mediawiki.cldr","1427275692",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser",
"1427275692"],["mediawiki.language.init","1427275692"],["mediawiki.jqueryMsg","1427275692",["mediawiki.language","mediawiki.util"]],["mediawiki.language.months","1449516915",["mediawiki.language"]],["mediawiki.language.names","1427275692",["mediawiki.language.init"]],["mediawiki.libs.jpegmeta","1427275692"],["mediawiki.page.gallery","1427275692"],["mediawiki.page.ready","1427275692",["jquery.accessKeyLabel","jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","jquery.placeholder"]],["mediawiki.page.startup","1427275692",["mediawiki.util"]],["mediawiki.page.patrol.ajax","1447951358",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.page.startup","user.tokens"]],["mediawiki.page.watch.ajax","1427275730",["mediawiki.api.watch","mediawiki.page.startup"]],["mediawiki.page.image.pagination","1427275692",["jquery.spinner","mediawiki.Uri"]],["mediawiki.special","1427275692"],["mediawiki.special.block","1427275692",["mediawiki.util"]],[
"mediawiki.special.changeemail","1427275692",["mediawiki.util"]],["mediawiki.special.changeslist","1427275692"],["mediawiki.special.changeslist.legend","1427275692"],["mediawiki.special.changeslist.legend.js","1427275692",["jquery.cookie","jquery.makeCollapsible"]],["mediawiki.special.changeslist.enhanced","1427275692"],["mediawiki.special.import","1427275692"],["mediawiki.special.movePage","1427275692",["jquery.byteLimit"]],["mediawiki.special.pageLanguage","1427275692"],["mediawiki.special.pagesWithProp","1427275692"],["mediawiki.special.preferences","1427275692",["mediawiki.language"]],["mediawiki.special.recentchanges","1427275692",["mediawiki.special"]],["mediawiki.special.search","1457614520"],["mediawiki.special.undelete","1427275692"],["mediawiki.special.upload","1452203762",["jquery.spinner","mediawiki.Title","mediawiki.api","mediawiki.libs.jpegmeta"]],["mediawiki.special.userlogin.common.styles","1427275692"],["mediawiki.special.userlogin.signup.styles","1427275692"],[
"mediawiki.special.userlogin.login.styles","1427275692"],["mediawiki.special.userlogin.common.js","1431436855"],["mediawiki.special.userlogin.signup.js","1427275692",["jquery.throttle-debounce","mediawiki.api","mediawiki.jqueryMsg"]],["mediawiki.special.unwatchedPages","1427275692",["mediawiki.Title","mediawiki.api.watch"]],["mediawiki.special.javaScriptTest","1427275692",["jquery.qunit"]],["mediawiki.special.version","1427275692"],["mediawiki.legacy.config","1427275692"],["mediawiki.legacy.ajax","1427275692",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1427275691"],["mediawiki.legacy.protect","1427275692",["jquery.byteLimit"]],["mediawiki.legacy.shared","1427275691"],["mediawiki.legacy.oldshared","1427275692"],["mediawiki.legacy.wikibits","1427275692",["mediawiki.util"]],["mediawiki.ui","1427275692"],["mediawiki.ui.checkbox","1427275692"],["mediawiki.ui.anchor","1427275692"],["mediawiki.ui.button","1427275691"],["mediawiki.ui.input","1427275692"],["es5-shim",
"1427275692",[],null,"local","return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["oojs","1427275692",["es5-shim","json"]],["oojs-ui","1427275692",["oojs"]],["ext.geshi.language.4cs","1427275692"],["ext.geshi.language.6502acme","1427275692"],["ext.geshi.language.6502kickass","1427275692"],["ext.geshi.language.6502tasm","1427275692"],["ext.geshi.language.68000devpac","1427275692"],["ext.geshi.language.abap","1427275692"],["ext.geshi.language.actionscript","1427275692"],["ext.geshi.language.actionscript3","1427275692"],["ext.geshi.language.ada","1427275692"],["ext.geshi.language.algol68","1427275692"],["ext.geshi.language.apache","1427275692"],["ext.geshi.language.applescript","1427275692"],["ext.geshi.language.apt_sources","1427275692"],["ext.geshi.language.arm","1427275692"],["ext.geshi.language.asm","1427275692"],["ext.geshi.language.asp","1427275692"],["ext.geshi.language.asymptote","1427275692"],["ext.geshi.language.autoconf","1427275692"],[
"ext.geshi.language.autohotkey","1427275692"],["ext.geshi.language.autoit","1427275692"],["ext.geshi.language.avisynth","1427275692"],["ext.geshi.language.awk","1427275692"],["ext.geshi.language.bascomavr","1427275692"],["ext.geshi.language.bash","1427275692"],["ext.geshi.language.basic4gl","1427275692"],["ext.geshi.language.bf","1427275692"],["ext.geshi.language.bibtex","1427275692"],["ext.geshi.language.blitzbasic","1427275692"],["ext.geshi.language.bnf","1427275692"],["ext.geshi.language.boo","1427275692"],["ext.geshi.language.c","1427275692"],["ext.geshi.language.c_loadrunner","1427275692"],["ext.geshi.language.c_mac","1427275692"],["ext.geshi.language.caddcl","1427275692"],["ext.geshi.language.cadlisp","1427275692"],["ext.geshi.language.cfdg","1427275692"],["ext.geshi.language.cfm","1427275692"],["ext.geshi.language.chaiscript","1427275692"],["ext.geshi.language.cil","1427275692"],["ext.geshi.language.clojure","1427275692"],["ext.geshi.language.cmake","1427275692"],[
"ext.geshi.language.cobol","1427275692"],["ext.geshi.language.coffeescript","1427275692"],["ext.geshi.language.cpp","1427275692"],["ext.geshi.language.cpp-qt","1427275692"],["ext.geshi.language.csharp","1427275692"],["ext.geshi.language.css","1427275692"],["ext.geshi.language.cuesheet","1427275692"],["ext.geshi.language.d","1427275693"],["ext.geshi.language.dcl","1427275693"],["ext.geshi.language.dcpu16","1427275693"],["ext.geshi.language.dcs","1427275693"],["ext.geshi.language.delphi","1427275693"],["ext.geshi.language.diff","1427275693"],["ext.geshi.language.div","1427275693"],["ext.geshi.language.dos","1427275693"],["ext.geshi.language.dot","1427275693"],["ext.geshi.language.e","1427275693"],["ext.geshi.language.ecmascript","1427275693"],["ext.geshi.language.eiffel","1427275693"],["ext.geshi.language.email","1427275693"],["ext.geshi.language.epc","1427275693"],["ext.geshi.language.erlang","1427275693"],["ext.geshi.language.euphoria","1427275693"],["ext.geshi.language.f1",
"1427275693"],["ext.geshi.language.falcon","1427275693"],["ext.geshi.language.fo","1427275693"],["ext.geshi.language.fortran","1427275693"],["ext.geshi.language.freebasic","1427275693"],["ext.geshi.language.freeswitch","1427275693"],["ext.geshi.language.fsharp","1427275693"],["ext.geshi.language.gambas","1427275693"],["ext.geshi.language.gdb","1427275693"],["ext.geshi.language.genero","1427275693"],["ext.geshi.language.genie","1427275693"],["ext.geshi.language.gettext","1427275693"],["ext.geshi.language.glsl","1427275693"],["ext.geshi.language.gml","1427275693"],["ext.geshi.language.gnuplot","1427275693"],["ext.geshi.language.go","1427275693"],["ext.geshi.language.groovy","1427275693"],["ext.geshi.language.gwbasic","1427275693"],["ext.geshi.language.haskell","1427275693"],["ext.geshi.language.haxe","1427275693"],["ext.geshi.language.hicest","1427275693"],["ext.geshi.language.hq9plus","1427275693"],["ext.geshi.language.html4strict","1427275693"],["ext.geshi.language.html5","1427275693"]
,["ext.geshi.language.icon","1427275693"],["ext.geshi.language.idl","1427275693"],["ext.geshi.language.ini","1427275693"],["ext.geshi.language.inno","1427275693"],["ext.geshi.language.intercal","1427275693"],["ext.geshi.language.io","1427275693"],["ext.geshi.language.j","1427275693"],["ext.geshi.language.java","1427275693"],["ext.geshi.language.java5","1427275693"],["ext.geshi.language.javascript","1427275693"],["ext.geshi.language.jquery","1427275693"],["ext.geshi.language.kixtart","1427275693"],["ext.geshi.language.klonec","1427275693"],["ext.geshi.language.klonecpp","1427275693"],["ext.geshi.language.latex","1427275693"],["ext.geshi.language.lb","1427275693"],["ext.geshi.language.ldif","1427275693"],["ext.geshi.language.lisp","1427275693"],["ext.geshi.language.llvm","1427275693"],["ext.geshi.language.locobasic","1427275693"],["ext.geshi.language.logtalk","1427275693"],["ext.geshi.language.lolcode","1427275693"],["ext.geshi.language.lotusformulas","1427275693"],[
"ext.geshi.language.lotusscript","1427275693"],["ext.geshi.language.lscript","1427275693"],["ext.geshi.language.lsl2","1427275693"],["ext.geshi.language.lua","1427275693"],["ext.geshi.language.m68k","1427275693"],["ext.geshi.language.magiksf","1427275693"],["ext.geshi.language.make","1427275693"],["ext.geshi.language.mapbasic","1427275693"],["ext.geshi.language.matlab","1427275693"],["ext.geshi.language.mirc","1427275693"],["ext.geshi.language.mmix","1427275693"],["ext.geshi.language.modula2","1427275693"],["ext.geshi.language.modula3","1427275693"],["ext.geshi.language.mpasm","1427275693"],["ext.geshi.language.mxml","1427275693"],["ext.geshi.language.mysql","1427275693"],["ext.geshi.language.nagios","1427275693"],["ext.geshi.language.netrexx","1427275693"],["ext.geshi.language.newlisp","1427275693"],["ext.geshi.language.nsis","1427275693"],["ext.geshi.language.oberon2","1427275693"],["ext.geshi.language.objc","1427275693"],["ext.geshi.language.objeck","1427275693"],[
"ext.geshi.language.ocaml","1427275693"],["ext.geshi.language.ocaml-brief","1427275693"],["ext.geshi.language.octave","1427275693"],["ext.geshi.language.oobas","1427275693"],["ext.geshi.language.oorexx","1427275693"],["ext.geshi.language.oracle11","1427275693"],["ext.geshi.language.oracle8","1427275693"],["ext.geshi.language.oxygene","1427275693"],["ext.geshi.language.oz","1427275693"],["ext.geshi.language.parasail","1427275693"],["ext.geshi.language.parigp","1427275693"],["ext.geshi.language.pascal","1427275693"],["ext.geshi.language.pcre","1427275693"],["ext.geshi.language.per","1427275693"],["ext.geshi.language.perl","1427275693"],["ext.geshi.language.perl6","1427275693"],["ext.geshi.language.pf","1427275693"],["ext.geshi.language.php","1427275693"],["ext.geshi.language.php-brief","1427275693"],["ext.geshi.language.pic16","1427275693"],["ext.geshi.language.pike","1427275693"],["ext.geshi.language.pixelbender","1427275693"],["ext.geshi.language.pli","1427275693"],[
"ext.geshi.language.plsql","1427275693"],["ext.geshi.language.postgresql","1427275693"],["ext.geshi.language.povray","1427275693"],["ext.geshi.language.powerbuilder","1427275693"],["ext.geshi.language.powershell","1427275693"],["ext.geshi.language.proftpd","1427275693"],["ext.geshi.language.progress","1427275693"],["ext.geshi.language.prolog","1427275693"],["ext.geshi.language.properties","1427275693"],["ext.geshi.language.providex","1427275693"],["ext.geshi.language.purebasic","1427275693"],["ext.geshi.language.pycon","1427275693"],["ext.geshi.language.pys60","1427275693"],["ext.geshi.language.python","1427275693"],["ext.geshi.language.q","1427275693"],["ext.geshi.language.qbasic","1427275693"],["ext.geshi.language.rails","1427275693"],["ext.geshi.language.rebol","1427275693"],["ext.geshi.language.reg","1427275693"],["ext.geshi.language.rexx","1427275693"],["ext.geshi.language.robots","1427275693"],["ext.geshi.language.rpmspec","1427275693"],["ext.geshi.language.rsplus","1427275693"],
["ext.geshi.language.ruby","1427275693"],["ext.geshi.language.sas","1427275693"],["ext.geshi.language.scala","1427275693"],["ext.geshi.language.scheme","1427275693"],["ext.geshi.language.scilab","1427275693"],["ext.geshi.language.sdlbasic","1427275693"],["ext.geshi.language.smalltalk","1427275693"],["ext.geshi.language.smarty","1427275693"],["ext.geshi.language.spark","1427275693"],["ext.geshi.language.sparql","1427275693"],["ext.geshi.language.sql","1427275693"],["ext.geshi.language.stonescript","1427275693"],["ext.geshi.language.systemverilog","1427275693"],["ext.geshi.language.tcl","1427275693"],["ext.geshi.language.teraterm","1427275693"],["ext.geshi.language.text","1427275693"],["ext.geshi.language.thinbasic","1427275693"],["ext.geshi.language.tsql","1427275693"],["ext.geshi.language.typoscript","1427275693"],["ext.geshi.language.unicon","1427275693"],["ext.geshi.language.upc","1427275693"],["ext.geshi.language.urbi","1427275693"],["ext.geshi.language.uscript","1427275693"],[
"ext.geshi.language.vala","1427275693"],["ext.geshi.language.vb","1427275693"],["ext.geshi.language.vbnet","1427275693"],["ext.geshi.language.vedit","1427275693"],["ext.geshi.language.verilog","1427275693"],["ext.geshi.language.vhdl","1427275693"],["ext.geshi.language.vim","1427275693"],["ext.geshi.language.visualfoxpro","1427275693"],["ext.geshi.language.visualprolog","1427275693"],["ext.geshi.language.whitespace","1427275693"],["ext.geshi.language.whois","1427275693"],["ext.geshi.language.winbatch","1427275693"],["ext.geshi.language.xbasic","1427275693"],["ext.geshi.language.xml","1427275694"],["ext.geshi.language.xorg_conf","1427275694"],["ext.geshi.language.xpp","1427275694"],["ext.geshi.language.yaml","1427275694"],["ext.geshi.language.z80","1427275694"],["ext.geshi.language.zxbasic","1427275694"],["skins.cologneblue","1427275694"],["skins.modern","1427275694"],["skins.monobook.styles","1427275694"],["skins.vector.styles","1427275691"],["skins.vector.js","1427275694",[
"jquery.tabIndex","jquery.throttle-debounce"]],["ext.geshi.local","1427275694"]]);mw.config.set({"wgLoadScript":"/wiki/load.php","debug":false,"skin":"vector","stylepath":"/wiki/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/wiki/index.php?title=$1","wgScriptPath":"/wiki","wgScriptExtension":".php","wgScript":"/wiki/index.php","wgSearchType":null,"wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://team.jagiellosolutions.pl","wgServerName":"team.jagiellosolutions.pl","wgUserLanguage":"pl","wgContentLanguage":"pl","wgVersion":"1.24.1","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Strona główna","wgFormattedNamespaces":{"-2":"Media","-1":
"Specjalna","0":"","1":"Dyskusja","2":"Użytkownik","3":"Dyskusja użytkownika","4":"Jagiello Solutions Wiki","5":"Dyskusja Jagiello Solutions Wiki","6":"Plik","7":"Dyskusja pliku","8":"MediaWiki","9":"Dyskusja MediaWiki","10":"Szablon","11":"Dyskusja szablonu","12":"Pomoc","13":"Dyskusja pomocy","14":"Kategoria","15":"Dyskusja kategorii"},"wgNamespaceIds":{"media":-2,"specjalna":-1,"":0,"dyskusja":1,"użytkownik":2,"dyskusja_użytkownika":3,"jagiello_solutions_wiki":4,"dyskusja_jagiello_solutions_wiki":5,"plik":6,"dyskusja_pliku":7,"mediawiki":8,"dyskusja_mediawiki":9,"szablon":10,"dyskusja_szablonu":11,"pomoc":12,"dyskusja_pomocy":13,"kategoria":14,"dyskusja_kategorii":15,"grafika":6,"dyskusja_grafiki":7,"użytkowniczka":2,"dyskusja_użytkowniczki":3,"image":6,"image_talk":7,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15},
"wgContentNamespaces":[0],"wgSiteName":"Jagiello Solutions Wiki","wgFileExtensions":["png","gif","jpg","jpeg"],"wgDBname":"thorin86_wiki","wgFileCanRotate":true,"wgAvailableSkins":{"vector":"Vector","cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","fallback":"Fallback"},"wgExtensionAssetsPath":"/wiki/extensions","wgCookiePrefix":"thorin86_wiki_wiki_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":"10000000","wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false});};if(isCompatible()){document.write("\u003Cscript src=\"/wiki/load.php?debug=false\u0026amp;lang=pl\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20150325T092812Z\"\u003E\u003C/script\u003E");};
/* cache key: thorin86_wiki-wiki_:resourceloader:filter:minify-js:7:41a16c65a713ff5870bfa88f4e34fce3 */