function visiable(opt){
    vis=document.getElementById("vis"+opt);
    dis=document.getElementById("vis-b"+opt);
    pas=document.getElementById("pass"+opt);
    vis.style.display="none";
    dis.style.display="block";
    pas.setAttribute('type', Text);
    }
    function disiable(opt){
    vis=document.getElementById("vis"+opt);
    dis=document.getElementById("vis-b"+opt);
    pas=document.getElementById("pass"+opt);
    vis.style.display="block";
    dis.style.display="none";
    pas.setAttribute('type', 'password');
    }