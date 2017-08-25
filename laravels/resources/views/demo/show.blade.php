<center>
    <table border="1">
        @foreach($data as $k=>$v)
            <tr>
                <td>序号</td>
                <td>商品图片</td>
                <td>商品名称</td>
                <td>商品价格</td>
                <td>商品介绍</td>
            </tr>
            <tr>
                <td>{{$v->good_id}}</td>
                <td>{{$v->good_img}}</td>
                <td>{{$v->good_name}}</td>
                <td>{{$v->good_price}}</td>
                <td>{{htmlspecialchars_decode($v->good_cont)}}</td>
            </tr>
        @endforeach
    </table>
    @for($i=1;$i<=$pageTotle;$i++)
        @if($i==$page)
               <span>{{$page}}</span>
            @else
               <a href="script(0);">{{$i}}</a>
        @endif
    @endfor
</center>
<script src="{{URL::asset('')}}/home/js/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){

    });
</script>
