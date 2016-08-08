<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">  
    <title>Roas</title>
    <!-- Get jQuery -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/typed.js" type="text/javascript"></script>
    <script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 50,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
    <style>
        *{
	padding:0;
	margin:0;
        }

        body{
                font-family: "Ubuntu", sans-serif;
                font-size: 100%;
                padding: 20px;
                background:#f8f8f8;
        }

        a{
                text-decoration: none;
                color:#666;
        }
        a:hover{
                color:#999;
        }
        p{
                line-height: 2em;
                margin:0 0 20px;
                text-align: center;
        }

        .wrap{
                max-width: 600px;
                text-align: center;
                margin: 90px auto auto auto;
        }

        .type-wrap{
                margin: auto;
                padding:20px;
                text-align: center;
                background:#f0f0f0;
                border-radius:5px;
                border:#CCC 1px solid;
        }
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        #demo ,#c{
            text-align: center;
            margin: 50px auto auto auto;
        }
    </style>
</head>
<body>
       <div class="wrap">
        <div class="type-wrap">
            <div id="typed-strings">
                <span><strong><?php echo $name;?>:</strong>Happy  valentine  day!!!</span>
            </div>
            <span id="typed" style="white-space:pre;"></span>
        </div>
    </div>
<div id="demo" style="width:200px; height:500px;"><canvas id="c" height="2px" width="500px"></canvas></div>

<script> 
    var b = document.body;
    var c = document.getElementsByTagName('canvas')[0];
    var a = c.getContext('2d');
    var canvas = document.getElementsByTagName('canvas')[0];
    var ctx = canvas.getContext('2d');
    document.body.clientWidth; 

    with(m=Math)C=cos,S=sin,P=pow,R=random;
    c.width=c.height=f=640;h=-250;
    function p(a,b,c){
        if(c>60)
            return[S(a*7)*(13+5/(.2+P(b*4,4)))-S(b)*50,b*f+50,625+C(a*7)*(13+5/(.2+P(b*4,4)))+b*400,a*1-b/2,a];
        A=a*2-1;
        B=b*2-1;
        if(A*A+B*B<1)
        {
            if(c>37)
            {
                n=(j=c&1)?6:4;o=.5/(a+.01)+C(b*125)*3-a*300;
                w=b*h;
                return[o*C(n)+w*S(n)+j*610-390,o*S(n)-w*C(n)+550-j*350,1180+C(B+A)*99-j*300,.4-a*.1+P(1-B*B,-h*6)*.15-a*b*.4+C(a+b)/5+P(C((o*(a+1)+(B>0?w:-w))/25),30)*.1*(1-B*B),o/1e3+.7-o*w*3e-6]
            }
            if(c>32)
            {
                c=c*1.16-.15;o=a*45-20;w=b*b*h;z=o*S(c)+w*C(c)+620;
                return[o*C(c)-w*S(c),28+C(B*.5)*99-b*b*b*60-z/2-h,z,(b*b*.3+P((1-(A*A)),7)*.15+.3)*b,b*.7]
            }
            o=A*(2-b)*(80-c*2);
            w=99-C(A)*120-C(b)*(-h-c*4.9)+C(P(1-b,7))*50+c*2;z=o*S(c)+w*C(c)+700;
            return[o*C(c)-w*S(c),B*99-C(P(b, 7))*50-c/3-z/1.35+450,z,(1-b/1.2)*.9+a*.1, P((1-b),20)/4+.05]
        }
    }
    var draw = setInterval('for(i=0;i<1e4;i++)if(s=p(R(),R(),i%46/.74)){z=s[2];x=~~(s[0]*f/z-h);y=~~(s[1]*f/z-h);if(!m[q=y*f+x]|m[q]>z)m[q]=z,a.fillStyle="rgb("+~(s[3]*h)+","+~(s[4]*h)+","+~(s[3]*s[3]*-80)+")",a.fillRect(x,y,1,1)}',0);

    var demo = document.getElementById('demo');
    function redraw(){
        /*
        var d_c = document.createElement("canvas");
        d_c.setAttribute("id","c");
        d_c.setAttribute("width","520");
        d_c.setAttribute("height","500");
        demo.appendChild(d_c);
        */
        draw = setInterval('for(i=0;i<1e4;i++)if(s=p(R(),R(),i%46/.74)){z=s[2];x=~~(s[0]*f/z-h);y=~~(s[1]*f/z-h);if(!m[q=y*f+x]|m[q]>z)m[q]=z,a.fillStyle="rgb("+~(s[3]*h)+","+~(s[4]*h)+","+~(s[3]*s[3]*-80)+")",a.fillRect(x,y,1,1)}',0);
        //alert(d_c);
    }

    function clear_canvas()
    {
        ctx.clearRect(0,0,520,500);
        //canvas.parentNode.removeChild(canvas);   //删除
    }

    function stop_draw(obj){
        clearInterval(obj);
    }

</script>
</body>
</html>