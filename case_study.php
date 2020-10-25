<!DOCTYPE html>
<html lang="en">
<head>
   <title>Content Management System by Dazines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
  
  <link rel="stylesheet" href="https://wagstaffgroup.co.uk/media/css/cms/cms.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>/media/js/plupload.full.min.js"></script>
</head>
<body >

<div class="x-plain x-border-item x-box-item x-plain-default" style="height: 60px; margin: 0px; width: 1366px;" id="header-container">
    <div id="header-container-body" class="x-plain-body x-plain-body-default x-plain-body-default x-layout-fit" style="width: 1366px; height: 33px; left: 0px; top: 0px;">
        <div class="x-panel x-fit-item x-panel-default" id="panel-1009" style="margin: 0px; width: 1366px; height: 33px;">
            <div id="panel-1009-body" class="x-panel-body x-panel-body-default x-panel-body-default" style="width: 1366px; height: 33px; left: 0px; top: 0px;">
                <div id="header">Wagstaff ADMIN - Website Management System</div>
                <div id="panel-1009-clearEl" class="x-clear" role="presentation">
                </div>
                </div>
        </div>
    </div>
</div>

<br/><br/>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
         <div class="page-header panel-primary"><h3 >Case Studies List</h3></div>
         <div class="text-right">
             <a class="btn btn-default"  href="javascript:" role="button" data-toggle="modal" data-target="#myModal" >Add</a>
             
         </div>
         <table id="example" class="table table-condensed" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th width="10">ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($case_studies as $case){ ?>
                    <tr>
                        <td><?php  echo $case->id; ?></td>
                        <td><a href="<?php echo site_url().'cms/case_study/?id='.$case->id; ?>"><?php  echo $case->name; ?></a></td>
                        <td><button type="submit" class="btn" onClick="deleteCase(<?php echo $case->id ?>)" >Delete</button></td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-5 scrollify" >
            <div class="page-header panel-primary"><h3 >Case Study Details</h3></div>
            <div class="mx-auto" >
              <form action="<?php echo site_url() ?>cms/<?= $this->router->fetch_class() ?>/edit" method="POST">
                  <div class="form-group">
                    <label for="name1">Page Name:</label>
                    <input type="text" name="name" class="form-control" id="name1" placeholder="Page Name" value="<?= $single_case_study->name ?>">
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Subtitle:</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle" value="<?= $single_case_study->subtitle ?>">
                  </div>
                  <div class="form-group">
                    <label for="title">Title:</label>
                     <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?= $single_case_study->title ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="title">Meta Description:</label>
                     <textarea id="textareafield-1101-inputEl" name="meta_description" rows="4" cols="20" class="x-form-field x-form-text" style="width:100%;" autocomplete="off" aria-invalid="false" data-errorqtip=""><?= $single_case_study->meta_description ?></textarea>
                  </div>
                  
                  <div class="form-group">
                     <label for="meta_keywords">Meta Keywords:</label>
                     <input type="text" name="meta_keywords" class="form-control" id="meta_keywords" placeholder="Meta Keywords" value="<?= $single_case_study->meta_keywords ?>">
                  </div>
				  
				  <div class="form-group">
                     <label for="summary">Summary:</label>
                     <textarea id="summary" name="summary" rows="4" cols="20" class="x-form-field x-form-text" style="width: 100%; height: 60px;" autocomplete="off" aria-invalid="false" data-errorqtip=""><?= $single_case_study->summary ?></textarea>
                  </div>
                  
				  <div class="form-group">
                     <label for="status">Publishing options:</label>
                     <select name="status" class="form-control">
					  <option>Publish this page</option>
					  <option>Save page as draft</option>
					</select>
                  </div>
				  
				    <div class="form-group">
				    <a class="btn btn-default" target="_blank" href="<?php echo site_url() ?>case-study/view/<?= $single_case_study->slug ?>" role="button">Preview</a>
                    </div>
                   
                   
                   <div class="form-group">
                        <label for="slider_video_new">Slider Video<br> (D 1920x1080)<br> (Type:video/mp4):</label>
                        <input type="file" id="slider_video_new" name="slider_video">
                    </div>
                    
                     <div class="form-group">
                        <label for="slider_video">Slider Video URL:</label>
                        <input type="text" name="slider_video" class="form-control" id="slider_video" placeholder="Slider Video URL" value="<?= $single_case_study->slider_video ?>">
                     </div>
                     
                      <div class="form-group">
                        <label for="ctabox_title">CTA box Title:</label>
                        <input type="text" name="ctabox_title" class="form-control" id="ctabox_title" placeholder="CTA box Title" value="<?= $single_case_study->ctabox_title ?>">
                     </div>
                     
                      <div class="form-group">
                        <label for="ctabox_url">CTA box Url:</label>
                        <input type="text" name="ctabox_url" class="form-control" id="ctabox_url" placeholder="CTA box Url" value="<?= $single_case_study->ctabox_url ?>">
                     </div>
                  
                  
                  <input type="hidden" name="id" value="<?= $single_case_study->id ?>" >
                  <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    
        <div class="col-sm-2 right" >
        <div class="page-header panel-primary"><h3 >Slider Images</h3></div>
        <form action="<?php echo site_url() ?>cms/<?= $this->router->fetch_class() ?>/image_delete" method="POST">
          <?php foreach($images as $image){ ?>
                <?php
                        $mage  = "http://wagstaffgroup.dev.signature.eu.com/media/storage/case_study/".$image->case_study_id."/".$image->image;
                ?>
                <div class="show-image">
                    <img src="<?php echo $mage ?>" height="90px" width="160px"  />
                    <input type="hidden" name="id" value="<?php echo $image->id ?>" />
                    <input class="delete" type="submit" value="Delete" />
                </div>
           <?php } ?>
        </form>
        </div>
    
    <div class="col-sm-2">
        <div class="page-header panel-primary"><h3>Upload Queue</h3>    </div>
       
        <?php if(isset($_GET['id'])) { ?>
            <div id="filelist">Your browser doesn't have Flash, Silverlight or HTML5 support.</div>
            <br />
            <div id="container">
                <a id="pickfiles" href="javascript:;" class="btn btn-default" role="button" data-record-id="<?php echo $_GET['id'] ?>" data-position="5" >Select files</a> 
                <a id="uploadfiles" class="btn btn-default" role="button" href="javascript:;">Upload files</a>
            </div>
        <?php } ?>
    </div>
  </div>
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Record</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url() ?>cms/<?= $this->router->fetch_class() ?>/add" method="POST">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Subtitle:</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle" required>
                  </div>
                  <input type="hidden" name="id" value="<?= $single_case_study->id ?>" >
                  <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  
  
</div>
<style>

    /*
    body, html {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    .container-fluid {
        margin: 0;
        padding: 0;
    }
    

    .scrollify,.right{
        height: 100vh;
        overflow: hidden;
        overflow-y: scroll; 
        text-align: center;
    }
    */
   
   .row {
        display: flex;
    }
    
    .row > div {
      border: 1px solid #04408c;
    }

    div.show-image {
    position: relative;
    float:left;
    margin:5px;
    }
    div.show-image:hover img{
        opacity:0.5;
    }
    div.show-image:hover input {
        display: block;
    }
    div.show-image input {
        position:absolute;
        display:none;
    }
    div.show-image input.update {
        top:0;
        left:0;
    }
    div.show-image input.delete {
        top:0;
        left:79%;
    }
</style>
<script>


    var controller = '<?= $this->router->fetch_class() ?>';


    $(document).ready(function() {
        $('#example').DataTable({sDom: 'lrtip'});
    } );
    
    
    function deleteCase(id){
        $.ajax({
            url: '<?php echo site_url() ?>cms/'+controller+'/delete',
            type: 'post',
            data: {id:id} ,
            success: function (response) {
               window.location.href = '<?php echo site_url() ?>cms/case_study';
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
            }
        });
    }
    
    
    var uploader = new plupload.Uploader({
    	runtimes : 'html5,flash,silverlight,html4',
    	browse_button : 'pickfiles', // you can pass an id...
    	container: document.getElementById('container'), // ... or DOM Element itself
    	url : '<?php echo site_url() ?>cms/'+controller+'/image_add',
    	flash_swf_url : '../js/Moxie.swf',
    	silverlight_xap_url : '../js/Moxie.xap',
    	unique_names : true,
    	resize: {
            width: 160,
            height: 90
        },
    	multipart_params : {
            "record_id" : document.getElementById("pickfiles").getAttribute("data-record-id"),
            "pos" :  document.getElementById("pickfiles").getAttribute("data-position"), 
        },
    	
    	filters : {
    		max_file_size : '10mb',
    		mime_types: [
    			{title : "Image files", extensions : "jpg,gif,png"},
    			{title : "Zip files", extensions : "zip"}
    		]
    	},
    
    	init: {
    		PostInit: function() {
    			document.getElementById('filelist').innerHTML = '';
    
    			document.getElementById('uploadfiles').onclick = function() {
    				uploader.start();
    				return false;
    			};
    		},
    
    		FilesAdded: function(up, files) {
    			plupload.each(files, function(file) {
    				document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
    			});
    		},
    
    		UploadProgress: function(up, file) {
    			document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
    		},
    		
    		UploadComplete: function(up, files) {
                location.reload();
                log('[UploadComplete]');
            },
 
    
    		Error: function(up, err) {
    			document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
    		}
    	}
    });
    
    uploader.init();

</script>
</body>
</html>



<?php /* ?>

<script language="javascript" type="text/javascript">

<!--
Ext.require([
    'Ext.form.*',
    'Ext.tree.*',
    'Ext.data.*',
    'Ext.selection.*',
    'Ext.grid.*',
    'Ext.dd.*'
]);

var base_url = '<?= base_url() ?>';
var selectedRow = -1;

var controller = '<?= $this->router->fetch_class() ?>';

var page_title = 'Case Studies Management';
var help_section = 'case studies';

var grid_title = 'Case Studies List';
var form_title = 'Case Study Details';
var window_add_title = 'New Record';

var video_url = '';

var preview_link = '';

// This is the items Ext app
Ext.QuickTips.init();

var caseStudyIDID;



    var row_data_storage = new Ext.data.Store({fields: ['id', 'text', 'link']});
DAZCMS.functions.itemLoad = function(id) {
    Ext.Ajax.request({
        url: site_url+'cms/'+controller+'/single',
        params: {
            id: id
        },
        success: function(res,opt) {
            Ext.getCmp('item_content_panel').enable();
            var data = Ext.JSON.decode(res.responseText);

            row_data_storage.loadData(data.rows);
            DAZCMS.functions.imagesRefresh({record_id:id});
            DAZCMS.vars.selectedNodeItemId = data.id;
            DAZCMS.panels.itemForm.getForm().setValues(data);

            video_url = data.slider_video;
            caseStudyIDID = id;
            preview_link = data.preview_url;        
        },
        failure: DAZCMS.functions.ajaxError
    });
}




DAZCMS.functions.itemsRefresh = function() {
    DAZCMS.panels.itemForm.getForm().reset();
    DAZCMS.tools.itemStore.removeAll();
    DAZCMS.tools.itemStore.load();
}


Ext.define('itemstoremodel', {
    idProperty: 'id',
    extend: 'Ext.data.Model',
    fields: [
        {name:'id', type:'int'},
        {name:'name', type:'string'},
        {name:'author_degree_id', type:'string'},
        {name:'pos', type:'int'}
    ]
});

    Ext.define('item_rows', {
        idProperty: 'id',
        extend: 'Ext.data.Model',
        fields: [
            {name: 'id', type: 'int'},
            {name: 'text', type: 'string'},
            {name: 'link', type: 'string'}
        ]
    });


    var editWindow = function () {


        if (bot_panel.getSelectionModel().hasSelection()) {
            var sel = bot_panel.getSelectionModel().getSelection();
            var model = sel[0];
           console.log(model);
            var val = model.get('text');
            var row_id = model.get('id');
            var link_content = model.get('link');
        }
        else {
            var val = '';
            return false;
        }

        var window_from_edit = Ext.create('Ext.window.Window', {
            title: 'Image Edit',
            height: 600,
            width: 800,
            layout: 'fit',
            items: [
                Ext.create('Ext.form.Panel', {
                    title: 'Edit Form',
                    bodyPadding: 5,
                    width: 350,
                    layout: 'anchor',
                    defaults: {anchor: '100%'},
                    items: [
                        {xtype: 'ckeditor',
                            name: 'text',
                            fieldLabel: 'Text',
                            value: val
                        },
                        {xtype: 'hiddenfield',
                            name: 'case_study_id',
                            value: caseStudyIDID},
                        {xtype: 'hiddenfield',
                            name: 'row_id',
                            value: row_id},
                        {xtype: 'filefield',
                            name: 'photo',
                            fieldLabel: 'Photo',
                            labelWidth: 50,
                            msgTarget: 'side',
                            anchor: '100%',
                            buttonText: 'Select Photo...'},
                        {
                            xtype: 'textfield',
                            fieldLabel: 'Link',
                            name: 'link',
                            labelWidth: 50,
                            value: link_content
                        }
                    ],
                    buttons: [{
                            text: 'Save',
                            handler: function () {
                                var form = this.up('form').getForm();
                                if (form.isValid()) {
                                    form.submit({
                                        url: 'cms/' + controller + "/upload_row/",
                                        waitMsg: 'Uploading your image...',
                                        success: function (fp, o) {
                                            window.top.location = window.top.location;
                                        }
                                    });
                                }
                            }
                        }, {
                            text: 'Reset',
                            handler: function () {
                                this.up('form').getForm().reset();
                            }
                        }]
                })
            ]
        }).show();
    }

/* ******************************************************** */


 /* 

Ext.define('DAZCMS.models.offices',{
        extend: 'Ext.data.Model',
        proxy: {
            type: 'ajax',
            url: 'cms/pages/product_offices',
            actionMethods: {create: 'POST', read: 'POST', update: 'POST', destroy: 'POST'},
            reader: {
                type: 'json',
                root: 'data',
                successProperty: 'success'
            }
        },
        id:0,
        fields: ['id', 'title']
    });

DAZCMS.stores.offices = Ext.create('Ext.data.Store',{
        model: DAZCMS.models.offices,
        autoLoad: true
    });

DAZCMS.tools.sidebarBackgroundColor = Ext.create('Ext.form.field.ComboBox',{
                name: 'office_id',
                fieldLabel: 'Location',
                valueField: 'id',
                displayField: 'title',
                queryMode:'local',
                store:DAZCMS.stores.offices,
                editable:false,
                id:'sidebar_category_color',
                value: '',
                listConfig: {
                    getInnerTpl: function() {
                        return '<div><span style="height:10px; width:14px; margin:3px 5px 0 0; display:inline-block; "></span>{title}</div>';
                    }
         }
    });
 
    
/* ******************************************************** */

/* ******************************************************** */


 /* 

Ext.define('DAZCMS.models.clients',{
        extend: 'Ext.data.Model',
        proxy: {
            type: 'ajax',
            url: 'cms/pages/product_client',
            actionMethods: {create: 'POST', read: 'POST', update: 'POST', destroy: 'POST'},
            reader: {
                type: 'json',
                root: 'data',
                successProperty: 'success'
            }
        },
        id:0,
        fields: ['id', 'title']
    });

DAZCMS.stores.clients = Ext.create('Ext.data.Store',{
        model: DAZCMS.models.clients,
        autoLoad: true
    });

DAZCMS.tools.clients = Ext.create('Ext.form.field.ComboBox',{
                name: 'client_id',
                fieldLabel: 'Client',
                valueField: 'id',
                displayField: 'title',
                queryMode:'local',
                store:DAZCMS.stores.clients,
                editable:false,
                id:'client_box',
                listConfig: {
                    getInnerTpl: function() {
                        return '<div><span style="height:10px; width:14px; margin:3px 5px 0 0; display:inline-block; "></span>{title}</div>';
                    }
         }
    });
    
/* ******************************************************** */

/* ******************************************************** */


 /* 

Ext.define('DAZCMS.models.sectors',{
        extend: 'Ext.data.Model',
        proxy: {
            type: 'ajax',
            url: 'cms/pages/product_sector',
            actionMethods: {create: 'POST', read: 'POST', update: 'POST', destroy: 'POST'},
            reader: {
                type: 'json',
                root: 'data',
                successProperty: 'success'
            }
        },
        id:0,
        fields: ['id', 'title']
    });

DAZCMS.stores.sectors = Ext.create('Ext.data.Store',{
        model: DAZCMS.models.sectors,
        autoLoad: true
    });

DAZCMS.tools.sectors = Ext.create('Ext.form.field.ComboBox',{
                name: 'sector_id',
                fieldLabel: 'Sector',
                valueField: 'id',
                displayField: 'title',
                queryMode:'local',
                store:DAZCMS.stores.sectors,
                editable:false,
                id:'sector_box',
                value: '',
                listConfig: {
                    getInnerTpl: function() {
                        return '<div><span style="height:10px; width:14px; margin:3px 5px 0 0; display:inline-block; "></span>{title}</div>';
                    }
         }
    });

   // The data store containing the list of states
var states = Ext.create('Ext.data.Store', {
    fields: ['abbr', 'name'],
    data : [
        {"abbr":"0", "name":"Save page as draft"},
        {"abbr":"1", "name":"Publish this page"},
    ]
});

// Create the combo box, attached to the states data store
DAZCMS.tools.status = Ext.create('Ext.form.ComboBox', {
    fieldLabel: 'Publishing options',
    store: states,
    queryMode: 'local',
    displayField: 'name',
    valueField: 'abbr',
    name:'status',
});
// create preview button 
DAZCMS.tools.preview = Ext.create('Ext.Button', {
    text     : 'Preview',
    margin: '0 0 5 207',
    class:'casestyle_preview',
    listeners: {
        click: function() { 
            // this == the button, as we are in the local scope
            window.open(
            preview_link,
             '_blank' // <- This is what makes it open in a new window.
            );
        },
    }
});




/* ******************************************************** */

 /* 

DAZCMS.tools.itemStore = Ext.create('Ext.data.Store',{
    model: 'itemstoremodel',
    autoLoad: true,    
    remoteSort: false,
    pageSize: 25,
    proxy: new Ext.data.HttpProxy({
        url: 'cms/'+controller+'/nodes',
        actionMethods: {create: 'POST', read: 'POST', update: 'POST', destroy: 'POST'},
        reader: {
            type: 'json',
            root: 'data',
            successProperty: 'success',
            totalProperty: 'count'
        }
    }),
    listeners: {
        load: function(){
            if (selectedRow > -1){
                DAZCMS.panels.itemsList.getSelectionModel().select(selectedRow);
            }
        }
    }
});

DAZCMS.panels.itemsList = Ext.create('Ext.grid.Panel', {
    title: grid_title,
    region: 'west',
    width: 400,
    minSize: 200,
    maxSize: 400,
    split: true,
    autoScroll: true,
    store: DAZCMS.tools.itemStore,
    selModel: Ext.create('Ext.selection.RowModel', {
        mode: 'single',
        listeners: {
            deselect: function() {
                DAZCMS.panels.itemForm.getForm().reset();
            },
            select: function(sm, rec, idx) {
                var item = rec.data;
                DAZCMS.panels.itemForm.getForm().reset();
                DAZCMS.functions.itemLoad(item.id);
                selectedRow = idx;
            }
        }
    }),
    tbar: [
        {
            text: 'Add',
            iconCls: 'icon-page-add',
            handler: function() {
                DAZCMS.windows.itemAddForm.getForm().reset();
                DAZCMS.windows.itemAdd.show();
            }
        },
        {
            text: 'Delete',
            iconCls: 'icon-page-delete',
            handler: function() {
                var sm = DAZCMS.panels.itemsList.getView().getSelectionModel();
                if (sm.hasSelection()) {
                    var item = sm.getSelection()[0].data;
                    if (item) {
                        Ext.MessageBox.confirm('Confirm Deletion', 'Are you sure to delete this record?<br />NOTE: This operation is irreversible!', function(btn) {
                            var sm = DAZCMS.panels.itemsList.getView().getSelectionModel();
                            if (sm.hasSelection()) {
                                var item = sm.getSelection()[0].data;
                                if(btn == 'yes') {
                                    Ext.Ajax.request({
                                        url: site_url+'cms/'+controller+'/delete',
                                        params: {
                                            id: item.id
                                        },
                                        success: function(res) {
                                            selectedRow = -1;
                                            DAZCMS.functions.itemsRefresh();
                                            Ext.getCmp('item_content_panel').disable();
                                        }
                                    });
                                }
                            }
                        });
                    } else {
                        DAZCMS.functions.showError('You have to select the item to delete');
                    }
                }
            }
        },
        '->',
        {
            text: 'Show help',
            iconCls: 'icon-general-question',
            handler: function(){
                DAZCMS.functions.showHelp(help_section, 'list');
            }
        }
    ],
    bbar: Ext.create('Ext.PagingToolbar', {
        store: DAZCMS.tools.itemStore,
        displayInfo: false,
        displayMsg: 'Displaying {0} - {1} of {2}',
        emptyMsg: "No data to display",
        items:[],
        listeners: {
            beforechange: function(){
                selectedRow = -1;
                
                Ext.getCmp('item_content_panel').disable();

            }
        }
    }),
    viewConfig: {
        forceFit: true,
        plugins: {
            ptype: 'gridviewdragdrop',
            dragGroup: 'firstGridDDGroup',
            dropGroup: 'firstGridDDGroup'
        },
        listeners: {
            drop: function(node, data, dropRec, dropPosition) {
                var firstId = data.records[0].get('id');
                var secondId = dropRec.get('id');

                Ext.Ajax.request({
                    url: site_url+'cms/'+controller+'/reorder',
                    params: {
                        firstId: firstId,
                        secondId: secondId,
                        position: dropPosition
                    },
                    success: function(res,opt) {
                        DAZCMS.functions.itemsRefresh();
                    },
                    failure: DAZCMS.functions.ajaxError
                });
            }
        }
    },
    columns: [
        {
            header: 'ID',
            dataIndex: 'id',
            width: 50,
            fixed: true,
            sortable: true
        },{
            header: 'Title',
            dataIndex: 'name',
            flex: 1,
            fixed: false,
            sortable: false
        }
    ]
});

DAZCMS.panels.itemForm = Ext.create('Ext.form.Panel',{
    region: 'center',
    id: 'item_preview',
    title: form_title,
    bodyStyle: "padding: 20px;",
    minSize: 200,
    maxSize: 400,
    fieldDefaults:  {
        labelWidth: 200,
        width: 800
    },
    autoScroll: true,
    split: true,
    fileUpload: true,
    defaultType: 'textfield',
    labelAlign: 'right',
    items: [
        {
            xtype: 'hidden',
            name: 'id'
        },
        {
            fieldLabel  : 'Page Name',
            name        : 'name',
            xtype       : 'textfield'
        },
        {
            fieldLabel  : 'Subtitle',
            name        : 'subtitle',
            xtype       : 'textfield'
        },  
        {
            fieldLabel  : 'Title',
            name        : 'title',
            xtype       : 'textfield'
        },
        {
            fieldLabel  : 'Meta Description',
            name        : 'meta_description',
            xtype       : 'textareafield'
        },
        {
            fieldLabel  : 'Meta Keywords',
            name        : 'meta_keywords',
            xtype       : 'textfield'
        },
        {
            fieldLabel  : 'Summary',
            name        : 'summary',
            xtype     : 'textareafield',
            grow      : true,
            anchor    : '100%'
       },
        DAZCMS.tools.status,
        DAZCMS.tools.preview,   
        Ext.create('Ext.form.File', {
            name:   'slider_video_new',
            fieldLabel:  'Slider Video<br> (D 1920x1080)<br> (Type:video/mp4)',
            anchor:   '100%',
            id:'slider_video_new'            
        }),
        Ext.create('Ext.form.field.Text',{
            xtype:   'textfield',
            name:   'slider_video',
            fieldLabel:  'Slider Video URL  <span class="remove_slider">Remove Video</span>',
            id: 'slider_video',
            flex:   1,
            value:video_url,
        }),
        Ext.create('Ext.form.field.Text',{
            name:   'ctabox_title',
            fieldLabel:  'CTA box Title',
            allowBlank:  true,
            anchor:   '100%'
        }),
        Ext.create('Ext.form.field.Text',{
            name:   'ctabox_url',
            fieldLabel:  'CTA box Url',
            allowBlank:  true,
            anchor:   '100%'
        }),
        {
            fieldLabel  : 'The Brief',
            name        : 'the_brief',
            xtype     : 'textareafield',
            grow      : true,
            anchor    : '100%'
        },
        {
            fieldLabel  : 'The Solution',
            name        : 'the_solution',
            xtype     : 'textareafield',
            grow      : true,
            anchor    : '100%'
        },
        DAZCMS.tools.sidebarBackgroundColor,
        DAZCMS.tools.clients,
        DAZCMS.tools.sectors,
        {
            fieldLabel  : 'Architect',
            name        : 'casestudy_architect',
            xtype       : 'textfield'
        },
        {
            fieldLabel  : 'Size',
            name        : 'casestudy_size',
            xtype       : 'textfield'
        },
        {
            xtype: 'checkbox',
            name: 'featured_on_homepage',
            fieldLabel: 'Featured on Homepage',
            inputValue: 1,
            uncheckedValue: '0',
            checked: false
        },
        {
            xtype: 'label',
            flex: 1,
            html: 'To add parallax effect use this shortcode with your image url : [wagstaff_image url=$image_url type=parallax] <br><br>&nbsp; [CTRL] + [SHIFT] + [V]" will be helpful to paste text without the formatting in editor. ',
            padding: '5 0 5 217',
            style: {
                color: 'blue',
                display:'block',
             }
        },
         Ext.create('Ext.ux.form.field.CKEditor',{
            name: 'block_quote',
            fieldLabel: 'Block quote',
            anchor: '100%',
            grow: true,
            CKConfig: {
                uiColor: '#DFE8F6',
                toolbar: 'Full',
                contentsCss: base_url + 'media/css/editor-pages.css',
                toolbar_Full: htmleditortoolbar,
                stylesSet: htmleditorstyles,
                font_names: htmleditorfonts
            },
            listeners: {
                afterrender: function(ckeditor) {
                    CKFinder.setupCKEditor(ckeditor.CKObj, '/media/ckfinder');
                }
            }
        }),
        {
            xtype: 'label',
            flex: 1,
            html: 'To add parallax effect use this shortcode with your image url : [wagstaff_image url=$image_url type=parallax] <br><br>&nbsp; [CTRL] + [SHIFT] + [V]" will be helpful to paste text without the formatting in editor. ',
            padding: '5 0 5 217',
            style: {
                color: 'blue',
                display:'block',
             }
        },
       /* Ext.create('Ext.ux.form.field.CKEditor',{
            name: 'content',
            fieldLabel: 'Content',
            anchor: '100%',
            grow: true,
            CKConfig: {
                uiColor: '#DFE8F6',
                toolbar: 'Full',
                contentsCss: base_url + 'media/css/editor-pages.css',
                toolbar_Full: htmleditortoolbar,
                stylesSet: htmleditorstyles,
                font_names: htmleditorfonts
            },
            listeners: {
                afterrender: function(ckeditor) {
                    CKFinder.setupCKEditor(ckeditor.CKObj, '/media/ckfinder');
                }
            }
        }),*/
//Rows panelconsol


 /* 

            bot_panel = Ext.create('Ext.grid.Panel', {
                title: "Paragraph listing",
                width: '100%',
                split: true,
                autoScroll: true,
                store: row_data_storage,
                tbar: [
                    {text: 'Edit paragraph', iconCls: 'icon-page-add', handler: editWindow
                    },
                    {text: 'Add paragraph', iconCls: 'icon-page-add', handler: function () {

                            var window_from = Ext.create('Ext.window.Window', {
                                title: 'Image Upload',
                                height: 600,
                                width: 800,
                                layout: 'fit',
                                items: [
                                    Ext.create('Ext.form.Panel', {
                                        title: 'Simple Form',
                                        bodyPadding: 5,
                                        width: 350,
                                        layout: 'anchor',
                                        defaults: {anchor: '100%'},
                                        items: [
                                            {xtype: 'ckeditor',
                                                name: 'text',
                                                fieldLabel: 'Text'
                                            },
                                            {xtype: 'hiddenfield',
                                                name: 'case_study_id',
                                                value: caseStudyIDID},
                                            {xtype: 'filefield',
                                                name: 'photo',
                                                fieldLabel: 'Photo',
                                                labelWidth: 50,
                                                msgTarget: 'side',
                                                allowBlank: true,
                                                anchor: '100%',
                                                buttonText: 'Select Photo...'},
                                            {
                                                xtype: 'textfield',
                                                fieldLabel: 'Link',
                                                name: 'link',
                                                labelWidth: 50
                                            }
                                        ],
                                        buttons: [{
                                                text: 'Save',
                                                handler: function () {
                                                    var form = this.up('form').getForm();
                                                    if (form.isValid()) {
                                                        form.submit({
                                                            url: 'cms/' + controller + "/upload_row/",
                                                            waitMsg: 'Uploading your image...',
                                                            success: function (fp, o) {
                                                                window.top.location = window.top.location;
                                                            }
                                                        });
                                                    }
                                                }
                                            }, {
                                                text: 'Reset',
                                                handler: function () {
                                                    this.up('form').getForm().reset();
                                                }
                                            }]
                                    })
                                ]
                            }).show();
                        }
                    },
                    {text: 'Delete paragraph', iconCls: 'icon-page-delete', handler: function () {
                            DAZCMS.functions.deleteItem(bot_panel, 'delete_row', DAZCMS.functions.itemsRefresh, true);
                       
                    }
                    }
                ],
                columns: [{text: 'ID', dataIndex: 'id', flex: 10 / 100}, {text: 'Name', dataIndex: 'text', flex: 89 / 100}]
            }),
///////////////////////////////////
    ],
    buttons: [{
        text: 'Submit',
        handler: function() {
            //var item = DAZCMS.panels.itemsList.getSelectionModel().getSelected();
            var sm = DAZCMS.panels.itemsList.getView().getSelectionModel();
            if (sm.hasSelection()) {
                var item = sm.getSelection()[0].data;
                var data = DAZCMS.panels.itemForm.getForm().getFieldValues();

                if ( item ) {
                    DAZCMS.panels.itemForm.getForm().submit({
                        clientValidation: false,
                        url: 'cms/'+controller+'/edit',
                        success: function(frm,act) {
                            var result = Ext.JSON.decode ( act.response.responseText );
                            DAZCMS.functions.showConfirmation('Record details updated');
                            DAZCMS.functions.itemsRefresh();
                            DAZCMS.functions.itemLoad(item.id);
                        },
                        failure: function(frm,act) {
                            DAZCMS.functions.showError(act.result.message);
                        }
                    });
                }
                else {
                    DAZCMS.functions.showError('Select a item to edit.');
                }
            }
        }
    }],
    tbar:           [
        '->',
        {
            text: 'Show help',
            iconCls: 'icon-general-question',
            handler: function(){
                DAZCMS.functions.showHelp(help_section, 'form');
            }
        }
    ]
});


DAZCMS.windows.itemAddForm = Ext.create('Ext.form.Panel',{
    region: 'center',
    id: 'item_add_form',
    border: false,
    bodyPadding: 10,
    labelWidth: 80,
    defaultType: 'textfield',
    labelAlign: 'right',
    items: [
        {
            fieldLabel: 'Title',
            name: 'title',
            anchor:'95%',
            allowBlank: false
        },
        {
            fieldLabel: 'Subtitle',
            name: 'subtitle',
            anchor:'95%'
        }
    ],
    buttons: [{
        text: 'Submit',
        handler: function() {
            DAZCMS.windows.itemAddForm.getForm().submit({
                url: 'cms/'+controller+'/add',
                success: function(frm, act) {
                    DAZCMS.functions.showConfirmation('New Record Successfully Added');
                    DAZCMS.windows.itemAdd.close();
                    DAZCMS.functions.itemsRefresh();
                },
                failure: function(frm, act) {
                    DAZCMS.functions.showError(act.result.mesg);
                }
            });
        }
    }]
});
DAZCMS.windows.itemAdd = Ext.create('Ext.window.Window',{
    title: window_add_title,
    layout: 'border',
    closeAction: 'hide',
    modal: true,
    width: 400,
    height: 200,
    items: [
        DAZCMS.windows.itemAddForm
    ]
});

DAZCMS.panels.main = Ext.create('Ext.panel.Panel',{
    region: 'center',
    id: 'content',
    layout: 'border',
    title: page_title,
    frame: false,
    border: false,
    split: true,
    bodyStyle:'padding-top:3px',
    items: [
        DAZCMS.panels.itemsList,
        {
            autoScroll: true,
            deferredRender: false,
            id: 'item_content_panel',
            disabled: true,
            xtype: 'tabpanel',
            region: 'center',
            border: false,
            items:[
                DAZCMS.panels.itemForm,
                DAZCMS.panels.imagesPanel
                // DAZCMS.panels.sectionsPanel
            ]
        }

    ]
});
Ext.onReady(function() {
    DAZCMS.windows.main = Ext.create('Ext.container.Viewport',{
        layout: 'border',
        items: [
            DAZCMS.panels.header,
            DAZCMS.panels.main
        ]
    });
});

  jQuery(document).on('click','.remove_slider',function(){
        var conf = confirm("Are you sure want to remove video ?");
        if(conf)
        {
            var ids = jQuery("input[name='id']").val();
            jQuery.ajax({
                url:site_url+'cms/case_study/remove_slider',
                data:{'id':ids},
                type:'POST',
                success:function(responce){
                    var data = jQuery.parseJSON(responce);
                    if(data.bool == true)
                    {
                        jQuery('#slider_video_url-inputEl').val('');    
                        DAZCMS.functions.itemsRefresh();
                    }
                    
                }
            });    
        }
        
    });
</script>
<?php */ ?>