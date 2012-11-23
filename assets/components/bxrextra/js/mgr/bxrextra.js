var BxrExtra = function(config) {
    config = config || {};
    BxrExtra.superclass.constructor.call(this,config);
};
Ext.extend(BxrExtra,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {}
});
Ext.reg('bxrextra',BxrExtra);
BxrExtra = new BxrExtra();