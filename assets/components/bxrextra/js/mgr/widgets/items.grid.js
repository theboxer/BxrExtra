
BxrExtra.grid.Items = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'bxrextra-grid-items'
        ,url: BxrExtra.config.connector_url
        ,baseParams: {
            action: 'mgr/item/getlist'
        }
        ,save_action: 'mgr/item/updatefromgrid'
        ,autosave: true
        ,fields: ['id','name','description']
        ,autoHeight: true
        ,paging: true
        ,remoteSort: true
        ,columns: [{
            header: _('id')
            ,dataIndex: 'id'
            ,width: 70
        },{
            header: _('name')
            ,dataIndex: 'name'
            ,width: 200
            ,editor: { xtype: 'textfield' }
        },{
            header: _('description')
            ,dataIndex: 'description'
            ,width: 250
            ,editor: { xtype: 'textfield' }
        }]
        ,tbar: [{
            text: _('bxrextra.item_create')
            ,handler: this.createItem
            ,scope: this
        },'->',{
            xtype: 'textfield'
            ,id: 'bxrextra-search-filter'
            ,emptyText: _('bxrextra.search...')
            ,listeners: {
                'change': {fn:this.search,scope:this}
                ,'render': {fn: function(cmp) {
                    new Ext.KeyMap(cmp.getEl(), {
                        key: Ext.EventObject.ENTER
                        ,fn: function() {
                            this.fireEvent('change',this);
                            this.blur();
                            return true;
                        }
                        ,scope: cmp
                    });
                },scope:this}
            }
        }]
    });
    BxrExtra.grid.Items.superclass.constructor.call(this,config);
};
Ext.extend(BxrExtra.grid.Items,MODx.grid.Grid,{
    windows: {}

    ,getMenu: function() {
        var m = [];
        m.push({
            text: _('bxrextra.item_update')
            ,handler: this.updateItem
        });
        m.push('-');
        m.push({
            text: _('bxrextra.item_remove')
            ,handler: this.removeItem
        });
        this.addContextMenuItem(m);
    }
    
    ,createItem: function(btn,e) {
        if (!this.windows.createItem) {
            this.windows.createItem = MODx.load({
                xtype: 'bxrextra-window-item-create'
                ,listeners: {
                    'success': {fn:function() { this.refresh(); },scope:this}
                }
            });
        }
        this.windows.createItem.fp.getForm().reset();
        this.windows.createItem.show(e.target);
    }
    ,updateItem: function(btn,e) {
        if (!this.menu.record || !this.menu.record.id) return false;
        var r = this.menu.record;

        if (!this.windows.updateItem) {
            this.windows.updateItem = MODx.load({
                xtype: 'bxrextra-window-item-update'
                ,record: r
                ,listeners: {
                    'success': {fn:function() { this.refresh(); },scope:this}
                }
            });
        }
        this.windows.updateItem.fp.getForm().reset();
        this.windows.updateItem.fp.getForm().setValues(r);
        this.windows.updateItem.show(e.target);
    }
    
    ,removeItem: function(btn,e) {
        if (!this.menu.record) return false;
        
        MODx.msg.confirm({
            title: _('bxrextra.item_remove')
            ,text: _('bxrextra.item_remove_confirm')
            ,url: this.config.url
            ,params: {
                action: 'mgr/item/remove'
                ,id: this.menu.record.id
            }
            ,listeners: {
                'success': {fn:function(r) { this.refresh(); },scope:this}
            }
        });
    }

    ,search: function(tf,nv,ov) {
        var s = this.getStore();
        s.baseParams.query = tf.getValue();
        this.getBottomToolbar().changePage(1);
        this.refresh();
    }
});
Ext.reg('bxrextra-grid-items',BxrExtra.grid.Items);




BxrExtra.window.CreateItem = function(config) {
    config = config || {};
    this.ident = config.ident || 'bxrextra-mecitem'+Ext.id();
    Ext.applyIf(config,{
        title: _('bxrextra.item_create')
        ,id: this.ident
        ,height: 150
        ,width: 475
        ,url: BxrExtra.config.connector_url
        ,action: 'mgr/item/create'
        ,fields: [{
            xtype: 'textfield'
            ,fieldLabel: _('name')
            ,name: 'name'
            ,id: this.ident+'-name'
            ,anchor: '100%'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('description')
            ,name: 'description'
            ,id: this.ident+'-description'
            ,anchor: '100%'
        }]
    });
    BxrExtra.window.CreateItem.superclass.constructor.call(this,config);
};
Ext.extend(BxrExtra.window.CreateItem,MODx.Window);
Ext.reg('bxrextra-window-item-create',BxrExtra.window.CreateItem);


BxrExtra.window.UpdateItem = function(config) {
    config = config || {};
    this.ident = config.ident || 'bxrextra-meuitem'+Ext.id();
    Ext.applyIf(config,{
        title: _('bxrextra.item_update')
        ,id: this.ident
        ,height: 150
        ,width: 475
        ,url: BxrExtra.config.connector_url
        ,action: 'mgr/item/update'
        ,fields: [{
            xtype: 'hidden'
            ,name: 'id'
            ,id: this.ident+'-id'
        },{
            xtype: 'textfield'
            ,fieldLabel: _('name')
            ,name: 'name'
            ,id: this.ident+'-name'
            ,width: 300
        },{
            xtype: 'textarea'
            ,fieldLabel: _('description')
            ,name: 'description'
            ,id: this.ident+'-description'
            ,width: 300
        }]
    });
    BxrExtra.window.UpdateItem.superclass.constructor.call(this,config);
};
Ext.extend(BxrExtra.window.UpdateItem,MODx.Window);
Ext.reg('bxrextra-window-item-update',BxrExtra.window.UpdateItem);