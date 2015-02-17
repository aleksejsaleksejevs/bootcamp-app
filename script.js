console.log("Hello");

for(var i = 1; i <= 30; i++){
  if(i % 3 == 0){
    if(i % 5 == 0){
      console.log("FizzBuzz");
    }else{
      console.log("fizz");
    }
  }else if(i % 17 == 0){
    console.log("This can be divided by 17");
  }else if(i % 5 == 0){
    console.log("buzz");
  }else{
    console.log(i);
  }

}
