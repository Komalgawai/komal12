function Marks(...arr){
    
    sum=0;
    return function(){
        
        arr.forEach(ele =>{
            sum+=ele;
         });
         console.log("Sum is:",sum)
        return sum/arr.length;
      
}();
}
result=Marks(20,20,20)
console.log("Average:",result);


