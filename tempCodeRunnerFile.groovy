#include <iostream>
using namespace std;
;
int xoor(int i,int * a, int n)
{
    int result =0;
    if(i==n) return result;
    else
     while(i<n-1)
     {
	       
	       if(!(a[i]^a[i+1])) 
	       i++;
	       
	       else
	      { 
	        result+=1;
	        xoor(i+2,a,n);
	      }
	    
	 }
}


int main() {
	// your code goes here
	int t;
	std::cin >> t;
	while(t--){
	   int n,a[n];
	    std::cin >>n;
	   for(int i=0;i<n;i++)
	   {
	       cin>>a[i];
	   }
	   //std::cout << n/2 << std::endl;
	
	  int score= xoor(0,a,n);
	 
	   cout<<score<<"\n";
	}
	
// 	}⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕⊕
	return 0;
}
