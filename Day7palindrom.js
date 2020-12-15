function palindrome(str){
    var len=str.length;
    for(let index=0;index<len;index++){
        if(str[index]!=str[len-1-index]){
            return "This is not a palindrome"
        }
    }
    return "This is a palindrome"

}

var value=palindrome("aba");
console.log(value);