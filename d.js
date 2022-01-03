
// Javascript implementation of the approach
 
// Function that returns true
// if string is a palindrome
function isPalindrome(s)
{
    var length = s.length;
 
    // Creating a Stack
    var st = [];
 
    // Finding the mid
    var i, mid = parseInt(length / 2);
    console.log(mid);
    for (i = 0; i < mid; i++) {
        st.push(s[i]);
    }
    console.log( st);
    // Checking if the length of the string
    // is odd, if odd then neglect the
    // middle character
    if (length % 2 != 0) {
        i++;
    }
    
    var ele;
    // While not the end of the string
    while (i != s.length)
    {
         ele = st[st.length-1];
         console.log( ele);
         st.pop();
 
    // If the characters differ then the
    // given string is not a palindrome
    if (ele != s[i])
        return false;
        i++;
    }
 
return true;
}
 
// Driver code
var s = "madam";
if (isPalindrome(s)) {
    console.log( "Yes");
}
else {
    console.log( "No");
}
 