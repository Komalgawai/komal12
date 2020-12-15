
function charr(ch){
    count=0;
    for(let i=0;i<ch.length;i++){
        if(ch[i]=='o'){
            count++;
        }
    }
    console.log(count)
}



var str=`Peter Piper picked a peck of pickled peppers
A peck of pickled peppers Peter Piper picked
If Peter Piper picked a peck of pickled peppers
Where’s the peck of pickled peppers Peter Piper picked?`

charr(str);