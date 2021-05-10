<script type="text/javascript">
    $(document).ready(function(){
        $('.nav_btn').click(function(){
            $('.mobile_nav_items').toggleClass('active');
        });
    });
    </script>
<script type="text/javascript">
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.dot');
const menuLength = menuItem.length
for(let i=0;i<menuLength;i++){
    if(menuItem[i].href===currentLocation){
        menuItem[i].className="active_1"
    }
}
</script>
