var str=`The quick brown fox jumps over the lazy dog`

function vowels(arr){
    count=0;
    for(let i=0;i<arr.length;i++){
       
        if(arr[i]=='a'||arr[i]=='e'||arr[i]=='i'||arr[i]=='o'||arr[i]=='u'){
            count++;
        }
    }
    console.log("Vowels is:",count)
}

vowels(str);