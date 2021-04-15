<form action="/purchases" method="post">
    {{ csrf_field() }}
    <input type="text" name="pattern" id="pattern" placeholder="預定車型(必填)"   required/>
    <input type="text" name="deposit" id="deposit" placeholder="訂金金額(必填)總計租金x30%"   required/>
    <input type="email" name="email" id="email" placeholder="電子郵件(必填)" required />
    <input type="submit" value="購買">
</form>


