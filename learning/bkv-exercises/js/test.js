/*
function square (x) {
    return x*x;
    var result=return;
    document.write ("The square of x is "+ result);
)

*/
function power (base, exponent) {
    var result=1;
    for (var count=0; count < exponent; count++)
        result*= base;
    return result;
document.write ("X to the power of Y is "+ result);
}

function multiplyAbsolute (number, factor) {
        function multiply (number) {
            return number*factor;
}
if (number<0)
    return multiply(-number);
else multiply(number);
}

function cats(){
    var cat={color:"grey", name:"Spot"};
    for (i=0;i<=cat.length;i++)
        document.writeln("<p>The cats names are :"+ cat.name +"</p>");

}

function range(upto){
    var result=[];
    for (var i=0;i<=upto;i++)
        result[i]=i;
    return result;
    document.writeln(result);
}

function scoops(){
    for (var scoop=10; scoop>0;scoop--)
        document.writeln(scoop+"-Gimme more scoops <br>");

}

function mackTheKnife(){
    var mack=[]; //makes an empty array called mack
    mack.push("Mack"); //inserts Mack as the first object in the mack array
    mack.push("the");
    mack.push("Knife");
    document.writeln("mack is " +mack +"<br>");
    mack.join(" ");//inserts a space in between each of the array items and creates a big string from the array strings
    document.writeln("mack is " +mack +"<br>");
    var mackBig=mack.join(" ");
    document.writeln("mackBig is " +mackBig +"<br>");
    var mackSmall=mackBig.split(" ");//split tears apart a big string into individual array items, based upon the separator provided e.g. " "- this could also be a comma (for a CSV file)- split is almost the opposite of join
    document.writeln("mackSmall is " +mackSmall +"<br>");
    mack.pop();//pops the last item off of the array e.g Knife is no longer in the array
    document.writeln("mack is " +mack +"<br>");
}


