#include <iostream>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
using namespace std;
void sym(int a, int b){
	if(a!=0){
		sym(a-1, b+1);
		cout<<a*b<<" ";
		sym(a-1, b+1);		
	}
	return;
}
int main(int argc, char** argv) {	
	cout<<"Podaj pierwsza liczbe ";
	int c;
	cin>>c;
	cout<<endl;
	cout<<"Podaj druga liczbe ";
	int d;
	cin>>d;
	cout<<endl;
	sym(c,d);
	return 0;
}
