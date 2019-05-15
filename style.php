<?php
  $font = array(
    'url' => "https://fonts.googleapis.com/css?family=Source+Sans+Pro",
    'name' => "'Source Sans Pro', sans-serif",
  );
?>
@font-face{font-family: <?php echo $font['name'] ;?> ;src: url(<?php echo $font['url']; ?>);}
*{padding:0;margin:0;transition: all 0s ease-in-out;transition-timing-function: cubic-bezier(0.22, .25, .27, .3);}li{list-style:none}input{outline: none;}
*:focus {outline: none;}
html{font-size:62.5%}
body{font-size:16px;font-weight: normal;font-family: <?php echo $font['name'] ;?>;}
p{text-align: justify;}
img{object-fit:cover}
a,a:focus,a:hover,a:visited,button{color:#095490;background:none;border:0;outline:0;text-decoration:none;cursor:pointer}
.left-img img {object-fit: contain;object-position: left;}
.mb1{margin-bottom: 1rem;}.m1{margin: 1rem}.m20{margin: 2rem 0}.mhalf{margin: 0.5rem}.m1a{margin: 1rem auto;}.m10{margin: 1rem 0;}.mh0{margin: 0.5rem 0;}.m0h{margin: 0 0.5rem;}.m12{margin: 1rem 2rem;}
.fs1{font-size: 1rem}.fs16{font-size: 1.6rem;}.fs14{font-size: 1.4rem;}.fs13{font-size: 1.3rem;}.fs12{font-size: 1.2rem;}.fs11{font-size: 1.1rem;}.fs3{font-size: 3rem;}.fs26{font-size: 2.6rem;}.fs2{font-size: 2rem;}
.fw4{font-weight: 400;}
.ucase{text-transform: uppercase;}.tdul,.tdhul:hover{text-decoration: underline;}.dimc {color: #707070;}
.br3r{border-radius: 0.3rem;-webkit-border-radius: 0.3rem;}
.p1{padding: 1rem;}.p2{padding: 2rem;}.lp1{padding-left: 1rem; }
.rc {color: #ce2b00;}.gryc{color: #333334;}.gbg{background: #f1f1f2;}
.rbtn{color: #fff;background-color: #dc3545;border-color: #dc3545;}
.dfx{display: flex;align-items: center;}.jcsb{justify-content: space-between;}
.flxwrp{flex-wrap: wrap;}.jcc{justify-content: center;}.baseline{align-items: baseline;}
.ftcnt{width: fit-content;}
<?php $mbp = 784; ?>
.wrapper{
  width: 96%;
  margin:auto;
}
.logo{width: 30rem;height:5rem;}.logo img{object-fit:contain;}
.mobile-toggler {
  display: none;
}


<?php include 'bs.css'; ?>
<?php include 'screens.php'; ?>

section[expanded] > h4 > .show-more {
  display: none;
}
section:not([expanded]) > h4 > .show-less {
  display: none;
}
.fright {
  float: right;
}
h4 {
  font-size:18px;
}
