{include file="index/head" /}
<style type="text/css">
.layui-table td, .layui-table th{text-align:left;}
.layui-table tbody tr.no{background-color:#f00;color:#fff;}
</style>
<div class="install-box">
    <fieldset class="layui-elem-field layui-field-title">
        <legend>运行环境检测</legend>
    </fieldset>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th>环境名称</th>
                <th>当前配置</th>
                <th>所需配置</th>
            </tr> 
        </thead>
        <tbody>
            {volist name="data.env" id="vo"}
            <tr class="{$vo[4]}">
                <td>{$vo[0]}</td>
                <td>{$vo[3]}</td>
                <td>{$vo[2]}</td>
            </tr>
            {/volist}
        </tbody>
    </table>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th>目录/文件</th>
                <th>所需权限</th>
                <th>当前权限</th>
            </tr> 
        </thead>
        <tbody>
            {volist name="data.dir" id="vo"}
            <tr class="{$vo[4]}">
                <td>{$vo[1]}</td>
                <td>{$vo[2]}</td>
                <td>{$vo[3]}</td>
            </tr>
            {/volist}
        </tbody>
    </table>
    <table class="layui-table" lay-skin="line">
        <thead>
            <tr>
                <th>函数/扩展</th>
                <th>类型</th>
                <th>结果</th>
            </tr> 
        </thead>
        <tbody>
            {volist name="data.func" id="vo"}
            <tr class="{$vo[2]}">
                <td>{$vo[0]}</td>
                <td>{$vo[3]}</td>
                <td>{$vo[1]}</td>
            </tr>
            {/volist}
        </tbody>
    </table>
    <div class="step-btns">
        <a href="/" class="layui-btn layui-btn-primary layui-btn-big fl">返回上一步</a>
        <a href="?step=3" class="layui-btn layui-btn-big layui-btn-normal fr">进行下一步</a>
    </div>
</div>
{include file="index/foot" /}