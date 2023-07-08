#include <iostream>
using namespace std;

int main() {
	int loop;
	std::cin >> loop;

while(loop--)
	{
	    int n; 
	    cin>>n;
	    bool a[n];
	  
	    for(int i=0;i<n;i++)
	    {
	        std::cin >>a[i];
	    }
	    
	    int l=0,r=1;
	    int result=0;
	    result= a[l]^a[r];
	    while(r<n)
	    {
	        if(result==0){
	            r++;
	            if(a[r]^a[r-1])
	            result++;
	            else
	            result+=result^a[r];
	            std::cout <<"@:"<< result << std::endl;
	        }
	        else{

	            l=r+1;
	            r=r+2;
	            if(r<n)
	          result+=a[l]^a[r];
	               std::cout <<"@:"<< result << std::endl;
	        }
	    }
	    std::cout<< result << std::endl;
	    
	    
	}
	
	return 0;
}
