var detail=function(){
    console.log("Myself",this.name,"RollNo is",this.roll);
}
var stu1={
    name:'komal',
    roll:1,
    hobbie:['dancing','music']
}

var stu2={
    name:'Vishu',
    roll:2,
    hobbie:['dancing','music']
}


detail.call(stu1)
detail.call(stu2)
console.log('......................')
var Marks={
    hobbies:function(Marks){
        console.log("Welcome dear:",this.name);
        console.log("Roll no is:",this.roll);
        console.log("Your hobbies:",this.hobbie)
        console.log("Total marks:",Marks);
        
    }

}

Marks.hobbies.apply(stu1,[98])
Marks.hobbies.apply(stu2,[99])