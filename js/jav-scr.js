const checkbox = document.getElementById('checkbox');

checkbox.addEventListener('change', ()=>{
  document.body.classList.toggle('dark');
  document.getElementById('hed').classList.toggle('dark1');
})


// sous page__________________
/*button calcule rsult____________________*/

function convert(type){
  var [from,to,inputNum,result]=["from","to","typeNumber","resulte"].map((x)=>document.getElementById(x))
  var resultate;
  
    if(type=="tempiratur") {

      let c_ = (from.value=="f")?(5/9)*(inputNum.value-32):
      (from.value=="k")?inputNum.value-273.15:
      inputNum.value;

      resultate={
        c :c_ ,
        f : c_*(9/5)+32,
        k : parseFloat(c_)+273.15
      }
    }
//______________________________________________________

      else if(type=="date") {

      let s_= (from.value=="fs")?(inputNum.value*Math.pow(10,-15)):
        (from.value=="ps")?(inputNum.value*Math.pow(10,-12)):
        (from.value=="ns")?(inputNum.value*Math.pow(10,-9)):
        (from.value=="µs")?(inputNum.value*Math.pow(10,-6)):
        (from.value=="ms")?(inputNum.value*Math.pow(10,-3)):
        (from.value=="min")?(inputNum.value*60):
        (from.value=="h")?(inputNum.value*3600):
        (from.value=="d")?(inputNum.value*3600*24):
        (from.value=="w")?(inputNum.value*3600*24*7):
        (from.value=="m")?(inputNum.value*3600*24*30):
        (from.value=="sem")?(inputNum.value*3600*24*7*18):
        (from.value=="y")?(inputNum.value*3600*24*36*12):
        (from.value=="dec")?(inputNum.value*3600*24*36*12*10):
        (from.value=="cen")?(inputNum.value*3600*24*36*12*100):
        (from.value=="mil")?(inputNum.value*3600*24*36*12*1000):
        inputNum.value;//pour second

        resultate={
        s:s_,
        fs :  s_*Math.pow(10,15),
        ps :  s_*Math.pow(10,12),
        ns :  s_*Math.pow(10,9),
        µs :  s_*Math.pow(10,6),
        ms :  s_*Math.pow(10,3),
        min :  s_/60,
        h :  s_/(60*60),
        d :  s_/(60*60*24),
        w :  s_/(60*60*24*7),
        sem :  s_/(60*60*24*7*18),
        y :  s_/(60*60*24*36*12),
        dec :  s_/(60*60*24*36*12*10),
        cen :  s_/(60*60*24*30*36*100),
        mil :  s_/(60*60*24*30*36*1000),
      };
    }
      
  
//__________________________________________________________________________________________
      else if(type=="destance") {

        let m_=  (from.value == "km") ? inputNum.value * 1000 : 
        (from.value == "mi") ? inputNum.value * 1609.34 : 
        (from.value == "cm") ? inputNum.value / 100 : 
        (from.value == "mm") ? inputNum.value / 1000 : 
        (from.value == "in") ? inputNum.value / 39.3701 : 
        (from.value == "ft") ? inputNum.value / 3.28084 : 
        (from.value == "yd") ? inputNum.value / 1.09361 : 
        inputNum.value;

            resultate = {
            m:m_,
            km: m_ / 1000 ,
            mi: m_ / 1609.34 ,
            cm: m_ * 100 ,
            mm: m_ * 1000 ,
            in: m_ * 39.3701 ,
            ft: m_ * 3.28084 ,
            yd: m_ * 1.09361 
          };
          }
    /* ________________________________________________________ */

      else if(type=="volume") {
        let m3_=(from.value == "L") ? inputNum.value / 1000 :
        (from.value == "gal") ? inputNum.value * 0.00378541 :
        (from.value == "ft3") ? inputNum.value * 0.0283168 :
        (from.value == "in3") ? inputNum.value * 0.0000163871 :
        inputNum.value;
        
        resultate = {
        m3: m3_,
        L:  m3_ * 1000 ,
        gal:  m3_ / 0.00378541 ,
        ft3:  m3_ / 0.0283168 ,
        in3:  m3_ / 0.0000163871 
      };
    }
      //_____________________________________________________________________
        else if(type=="pression"){
        let Pa_=(from.value == "kPa") ? inputNum.value * 1000 :
        (from.value == "bar") ? inputNum.value * 100000 :
        (from.value == "psi") ? inputNum.value * 6894.76 :
        (from.value == "mmHg") ? inputNum.value * 133.322 :
        inputNum.value;
        
          resultate= {
          Pa: Pa_,
          kPa:  Pa_ / 1000 ,
          bar:  Pa_ / 100000 ,
          psi:  Pa_ / 6894.76 ,
          mmHg:  Pa_ / 133.322 
        };

        }
      else{}

      if (to.value == from.value)
        result.innerHTML = inputNum.value + " " + from.value + "   =   " + inputNum.value + " " + to.value;
      else
        result.innerHTML = inputNum.value + " " + from.value + "   =   " + resultate[to.value]+ " " + to.value;


  }



