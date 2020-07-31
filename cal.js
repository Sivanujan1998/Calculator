function num1(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=1;
    else
    document.design.input.value=document.design.input.value+1;
    
}
function num2(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=2;
    else
    document.design.input.value=document.design.input.value+2;
}
function num3(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=3;
    else
    document.design.input.value=document.design.input.value+3;
}
function num4(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=4;
    else
    document.design.input.value=document.design.input.value+4;
}
function num5(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=5;
    else
    document.design.input.value=document.design.input.value+5;
}
function num6(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=6;
    else
    document.design.input.value=document.design.input.value+6;
}
function num7(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=7;
    else 
    document.design.input.value=document.design.input.value+7;
}
function num8(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=8;
    else
    document.design.input.value=document.design.input.value+8;
}
function num9(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=9;
    else
    document.design.input.value=document.design.input.value+9;
}
function num0(){
    if(parseInt(document.design.input.value)==0)
    document.design.input.value=0;
    else
    document.design.input.value=document.design.input.value+0;
}
function cancel(){
    document.design.input.value = 0;
}
function plusorminus(){
    if(document.design.input.value.length==0){

    document.design.input.value=0;
}
    else{
    document.design.input.value= parseFloat(document.design.input.value)*-1;
}
}
function percen(){
    
    const string=document.design.input.value;
    const arr1=string.split("");
    if(arr1.pop()=="%"){
        document.design.input.value=document.design.input.value
    }else{
    document.design.input.value=document.design.input.value+"%";
}
}
function devide(){
    const string=document.design.input.value;
    const arr1=string.split("");
    if(arr1.pop()=="/"){
        document.design.input.value=document.design.input.value
    }else{
    document.design.input.value=document.design.input.value+"/";
}
}
function multi(){
    const string=document.design.input.value;
    const arr1=string.split("");
    if(arr1.pop()=="*"){
        document.design.input.value=document.design.input.value
    }else{
    document.design.input.value=document.design.input.value+"*";
}
}
function sub(){
    const string=document.design.input.value;
    const arr1=string.split("");
    if(arr1.pop()=="-"){
        document.design.input.value=document.design.input.value
    }else{
    document.design.input.value=document.design.input.value+"-";
}
}
function add(){
    const string=document.design.input.value;
    const arr1=string.split("");
    if(arr1.pop()=="+"){
        document.design.input.value=document.design.input.value
    }else{
    document.design.input.value=document.design.input.value+"+";
}
}
function del(){
    const string=document.design.input.value;
    const arr1=string.split("");
    if(arr1.length==1)
    {
        document.design.input.value=0;
    }else{
    delete arr1.pop();
    document.design.input.value=arr1.join("");
    }
}
function leftb(){
    document.design.input.value=document.design.input.value+"(";
}
function rightb(){
    document.design.input.value=document.design.input.value+")";
}
function point(){
    const string=document.design.input.value;
    const arr1=string.split("");
    if(arr1.pop()=="."){
        document.design.input.value=document.design.input.value
    }else{
    document.design.input.value=document.design.input.value+".";
}
}
