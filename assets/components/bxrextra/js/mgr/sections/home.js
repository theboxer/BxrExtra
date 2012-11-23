Ext.onReady(function() {
    MODx.load({ xtype: 'bxrextra-page-home'});
});

BxrExtra.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'bxrextra-panel-home'
            ,renderTo: 'bxrextra-panel-home-div'
        }]
    });
    BxrExtra.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(BxrExtra.page.Home,MODx.Component);
Ext.reg('bxrextra-page-home',BxrExtra.page.Home);