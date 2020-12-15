var employee={
    
    Student1:
    {
        name:"komal",
        rollno:1,
        phoneno:7775982354,
        department:"ENTC",
        hobbies:['Dancing','Singing']
    },
    Student2:
    {
        name:"Monika",
        rollno:2,
        phoneno:785369852,
        department:"ENTC",
        hobbies:['Sport','Cooking']

    },
    Student3:
    {
        name:"Vishakha",
        rollno:3,
        phoneno:777585203,
        department:"COMP",
        hobbies:['Dancing','Sport']

    },
    Student4:
    {
        name:"Vijaya",
        rollno:4,
        phoneno:8523697410,
        department:"COMP",
        hobbies:['Writing','Exercise']

    },
    Student5:
    {
        name:"Apeksha",
        rollno:5,
        phoneno:963258454,
        department:"ENTC",
        hobbies:['Photograpy','Painting'] 

    }




}
for(const key in employee){
    var emp=employee[key];
     if(typeof(emp)){
        for(const key in emp){
            console.log(key+":"+emp[key]);
        }
    }
    
    else{
        console.log(key+":"+emp)
    }
}