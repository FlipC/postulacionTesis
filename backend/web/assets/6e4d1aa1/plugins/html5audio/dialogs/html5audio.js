﻿CKEDITOR.dialog.add("html5audio",function(a){return{title:a.lang.html5audio.title,minWidth:500,minHeight:100,contents:[{id:"info",label:a.lang.html5audio.infoLabel,elements:[{type:"vbox",padding:0,children:[{type:"hbox",widths:["365px","110px"],align:"right",children:[{type:"text",id:"url",label:a.lang.common.url,required:!0,validate:CKEDITOR.dialog.validate.notEmpty(a.lang.html5audio.urlMissing),setup:function(a){this.setValue(a.data.src)},commit:function(a){a.setData("src",this.getValue())}},{type:"button",
id:"browse",style:"display:inline-block;margin-top:14px;",align:"center",label:a.lang.common.browseServer,hidden:!0,filebrowser:"info:url"}]}]},{type:"hbox",id:"alignment",children:[{type:"radio",id:"align",label:a.lang.common.align,items:[[a.lang.common.alignCenter,"center"],[a.lang.common.alignLeft,"left"],[a.lang.common.alignRight,"right"],[a.lang.common.alignNone,"none"]],"default":"center",setup:function(a){a.data.align&&this.setValue(a.data.align)},commit:function(a){a.setData("align",this.getValue())}}]}]},
{id:"Upload",hidden:!0,filebrowser:"uploadButton",label:a.lang.html5audio.upload,elements:[{type:"file",id:"upload",label:a.lang.html5audio.btnUpload,style:"height:40px",size:38},{type:"fileButton",id:"uploadButton",filebrowser:"info:url",label:a.lang.html5audio.btnUpload,"for":["Upload","upload"]}]},{id:"advanced",label:a.lang.html5audio.advanced,elements:[{type:"vbox",padding:0,children:[{type:"hbox",children:[{type:"radio",id:"autoplay",label:a.lang.html5audio.autoplay,items:[[a.lang.html5audio.yes,
"yes"],[a.lang.html5audio.no,"no"]],"default":"no",setup:function(a){a.data.autoplay&&this.setValue(a.data.autoplay)},commit:function(a){a.setData("autoplay",this.getValue())}}]}]}]}]}});