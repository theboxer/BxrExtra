BxrExtra.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('bxrextra')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,activeItem: 0
            ,hideMode: 'offsets'
            ,items: [{
                title: _('bxrextra.items')
                ,items: [{
                    html: '<p>'+_('bxrextra.intro_msg')+'</p>'
                    ,border: false
                    ,bodyCssClass: 'panel-desc'
                },{
                    xtype: 'bxrextra-grid-items'
                    ,preventRender: true
                    ,cls: 'main-wrapper'
                }]
            }]
        }]
    });
    BxrExtra.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(BxrExtra.panel.Home,MODx.Panel);
Ext.reg('bxrextra-panel-home',BxrExtra.panel.Home);