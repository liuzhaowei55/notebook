var Vue = require('vue');
var Element = require('element-ui');
require('element-ui/lib/theme-default/button.css');
//require('element-ui/lib/theme-default/index.css');
Vue.use(Element);

var Main = {
  template: `
    <el-button>
    	请更新 Vue 和 Element 的版本号
    </e-button>
  `
}
new Vue({
    el: "#main",
    render: h=>h(Main),
});
