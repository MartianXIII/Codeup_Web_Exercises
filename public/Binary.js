a=1;
    b=2;
    //find one that fails
    while (a!=b) {
        old=a;
        a+=a;
        b=a+1;
    }
    //do binary search
    low=old;
    high=a;
    while (high-low>1) {
        mid=parseInt((low+high)/2,10);
        a=mid;
        b=a+1;
        if (a==b) {
            high=mid;
        } else {
            low=mid;
        }
    }
    console.log(high);