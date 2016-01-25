<!-- header section start-->

<div class="header-section">
    <div class="logo1">
        <a><img src="{{ asset('images/logo.jpg')  }}" alt=""></a>
    </div>
    <div class="logo2">
        <a><img src="{{ asset('images/umss1.jpg')  }}" alt=""></a>
    </div>
    <div class="logo3">
        <a><img src="{{ asset('images/fcyt1.jpg')  }}" alt=""></a>
    </div>
     <div class="logo4">
        <a><img src="{{ asset('images/logo3.png')  }}" alt=""></a>
     </div>
        <div class="hora">

        <span id="liveclock" ><font size="2" face="Arial"><b><font size="1">Hora: </font>8:48:58 PM</b></font></span>
   <script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()


        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='2' face='Arial' ><b><font size='1'>Hora: </font>"+hours+":"+minutes+":"+seconds+" "+dn+"</b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }


        window.onload=show5
         //-->
     </script>
        <br>
               <font size="1">Fecha: <font size="2" face="Arial"><?=date('d/m/Y ');?>
        </br>
    </div>
    
        <h1 class="tituloSistema1"> Sistema de Planes 
            Globales </h1>
    
    <!--toggle button start-->
   <a class="toggle-btn"><i class="fa fa-bars"></i></a>

    <!--toggle button end-->


    <!--notification menu start -->
    <div class="menu-left">
        <ul class="notification-menu">
            <li>

            </li>
            <li>
               

            </li>
            <li>
                <a href="{{ url('/dashboard') }}" class="btn btn-default dropdown-toggle" >
                    INICIO
                    
                </a>

            </li>
            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    FCyT
                    
                </a>
            </li>
             <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    CARRERAS
                    
                </a>
                
            </li>
             <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    NOTICIAS
                    
                </a>
                
            </li>

        </ul>
    </div>
    <div class="menu-right">
        <ul class="notification-menu">
            <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->firstname.' ' .Auth::user()->lastname }}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li><a href="{{ url('auth/user/change-password') }}"><i class="fa fa-key"></i> <span>{{ trans('ui.header_top.change_password') }}</span></a></li>
                    <li><a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> {{ trans('ui.header_top.logout') }}</a></li>
                </ul>
            </li>

        </ul>
    </div>

     
    <!--notification menu end -->

</div>

<!-- header section end-->