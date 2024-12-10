<!-- Message  -->
@if(Session::has('success'))
<div id="msg" style="position:fixed; top:2px; right:2px; background-color: blue; color:white; padding:4px 20px; border-radius:10px;">
{{session('success')}}
</div>
<script>
   window.onload = function(){
    setTimeout(() => {
        document.getElementById('msg').style.display = 'none';
    }, 2000);
}
</script>
@endif