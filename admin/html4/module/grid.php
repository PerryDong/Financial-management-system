<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="74">
            <col width="74">
            <col width="74">
            <col width="74">
            <col width="96">
        </colgroup>
        <thead>
            <tr>
                <th>课题编号</th>
                <th>课题名称</th>
                <th>负责人</th>
                <th>状态</th>
                <th>预算总金额</th>
            </tr>
        <thead>
        <tbody>
            <?php for($i=0;$i<10;$i++) { ?>
            <tr>
                <td>001</td>
                <td>文档分析</td>
                <td>王红</td>
                <td>未结题</td>
                <td>1000</td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" class="allbox">
                </td>
                <td colspan="3" class="last">
                    <a href="?">&lt;&lt;</a>
                    <a href="?">1</a>
                    <a href="?">2</a>
                    <a href="?">3</a>
                    <a href="?">4</a>
                    <a href="?">5</a>
                    <a href="?">6</a>
                    <a href="?">&gt;&gt;</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
