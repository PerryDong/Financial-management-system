<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="196">
            <col width="196">
        </colgroup>
        <thead>
            <tr>
                <th>选择</th>
                <th>日期</th>
                <th>消息</th>
            </tr>
        <thead>
        <tbody>
            <?php for($i=0;$i<10;$i++) { ?>
            <tr>
            	<td class="center"><input type="checkbox" value=""></td>
                <td>2014-02-12</td>
                <td> <a href="###">查看消息</a></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="1" class="allbox">
                </td>
                <td colspan="2" class="last">
                    <a href="">&lt;&lt;</a>
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="">6</a>
                    <a href="">&gt;&gt;</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
