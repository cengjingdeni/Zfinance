define("user:page/account/p2pIndex/p2pIndex.js",function(require,exports,module){"use strict";function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}function _inherits(subClass,superClass){if("function"!=typeof superClass&&null!==superClass)throw new TypeError("Super expression must either be null or a function, not "+typeof superClass);subClass.prototype=Object.create(superClass&&superClass.prototype,{constructor:{value:subClass,enumerable:!1,writable:!0,configurable:!0}}),superClass&&(Object.setPrototypeOf?Object.setPrototypeOf(subClass,superClass):subClass.__proto__=superClass)}var React=require("common:node_modules/react/react"),ReactDOM=require("common:node_modules/react-dom/index"),TotalAsset=require("user:widget/account/p2p/wdg-total-asset/wdg-total-asset.jsx"),AssetStatistics=require("user:widget/account/p2p/wdg-asset-statistics/wdg-asset-statistics.jsx"),AssetTab=require("user:widget/account/p2p/wdg-tab-main/wdg-tab-main.jsx"),P2pIndexInfo=function(_React$Component){function P2pIndexInfo(){_classCallCheck(this,P2pIndexInfo),_React$Component.apply(this,arguments)}return _inherits(P2pIndexInfo,_React$Component),P2pIndexInfo.prototype.componentDidMount=function(){$(".loading-page-whole").remove()},P2pIndexInfo.prototype.render=function(){return React.createElement("div",null,React.createElement(TotalAsset,{p2pAssetData:this.props.userData.p2pAssetData,balanceData:this.props.userData.balanceData}),React.createElement(AssetStatistics,{p2pAssetData:this.props.userData.p2pAssetData}),React.createElement(AssetTab,{userData:this.props.userData}))},P2pIndexInfo}(React.Component),index={init:function(userData){ReactDOM.render(React.createElement(P2pIndexInfo,{userData:userData}),document.getElementById("p2p-index"))}};module.exports=index});