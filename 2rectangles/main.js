window.addEventListener('load', function () {
    var big = document.getElementById('bigRectangle');
    var small = document.getElementById('smallRectangle');
    var bigcoords = big.getBoundingClientRect();

    small.addEventListener('mousedown', moveOn);
    document.addEventListener('mouseup', moveOff);


    function  moveOff()
    {
        small.removeEventListener('mousemove', move);
        small.x = null;
        small.y = null;
    }


    function move(e)
    {


        var dx = small.x - e.pageX;
        var dy = small.y - e.pageY;

        if((e.pageX+small.xr+7)>bigcoords.right){document.body.style.backgroundColor = 'black';}
        else if((e.pageY+small.yb+7)>bigcoords.bottom){document.body.style.backgroundColor = 'black';}
        else if((e.pageX+small.xl+7)<bigcoords.left){document.body.style.backgroundColor = 'black';}
        else if((e.pageY+small.yt+7)<bigcoords.top){document.body.style.backgroundColor = 'black';}
        else document.body.style.backgroundColor = 'white';
        var curx = smallcoord.left - dx;
        var cury = smallcoord.top - dy;
        small.style.left = curx + 'px';
        small.style.top = cury + 'px';

        console.log(smallcoord.left);



    }

    function moveOn(e)
    {
        small.addEventListener('mousemove', move);
        small.x = e.pageX;
        small.y = e.pageY;
        smallcoord = small.getBoundingClientRect();
        small.xr = smallcoord.right - e.pageX;
        small.yb = smallcoord.bottom - e.pageY;
        small.xl = smallcoord.left - e.pageX;
        small.yt = smallcoord.top - e.pageY;
    }



});
