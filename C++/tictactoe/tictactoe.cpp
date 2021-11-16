#include <iostream>
using namespace std;

//Zmienna z wartościami pola
char pola[10]={'0','1','2','3','4','5','6','7','8','9'};


// wywołanie wygrana() i tablica() by mozna było je umiescić w int main
int wygrana();
void tablica();

int main(){
	int gracz = 1,i,wybur;
	
	char zaznaczenie;
	//skrypt gry
	do{
		tablica();
		// decydowanie który gracz ma teraz swoją kolej
		gracz=(gracz%2)?1:2;
		
		cout << "Gracz " << gracz << " , wprowadż liczbe: ";
		cin >> wybur;
		
		// przypisanie odpowiedniemu graczowi O albo X
		zaznaczenie=(gracz == 1)?'X':'O';
		
		
		// wypisanie na planszy wyboru gracza
		if(wybur == 1 && pola[1] == '1'){
			pola[1]=zaznaczenie;
		}else if(wybur == 2 && pola[2]=='2'){
			pola[2]=zaznaczenie;
		}else if(wybur == 3 && pola[3]=='3'){
			pola[3]=zaznaczenie; 
		}else if(wybur == 4 && pola[4]=='4'){
			pola[4]=zaznaczenie; 
		}else if(wybur == 5 && pola[5]=='5'){
			pola[5]=zaznaczenie; 
		}else if(wybur == 6 && pola[6]=='6'){
			pola[6]=zaznaczenie; 
		}else if(wybur == 7 && pola[7]=='7'){
			pola[7]=zaznaczenie; 
		}else if(wybur == 8 && pola[8]=='8'){
			pola[8]=zaznaczenie; 
		}else if(wybur == 9 && pola[9]=='9'){
			pola[9]=zaznaczenie;
		}else{
			cout << "Nie mozna wykonac ruchu";
			
			gracz--;
			cin.ignore();
			cin.get();
			
		}
		// przypisanie warunku wygranej do wartości i
		i=wygrana();
		
		gracz++;
		//skrypt sprawdzający czy warunek wygranejjest spełniony
	}while(i==-1);
	tablica();
	if(i==1){
		cout << "==>\aGracz " << --gracz <<" Wygrywa ";
	}else{
		cout << "==>\aRemis";
	}
			
}
		
		
		
		
		





int wygrana(){
	//skrypt sprawdzający warunek wygranej
    if (pola[1] == pola[2] && pola[2] == pola[3])

        return 1;
    else if (pola[4] == pola[5] && pola[5] == pola[6])

        return 1;
    else if (pola[7] == pola[8] && pola[8] == pola[9])

        return 1;
    else if (pola[1] == pola[4] && pola[4] == pola[7])

        return 1;
    else if (pola[2] == pola[5] && pola[5] == pola[8])

        return 1;
    else if (pola[3] == pola[6] && pola[6] == pola[9])

        return 1;
    else if (pola[1] == pola[5] && pola[5] == pola[9])

        return 1;
    else if (pola[3] == pola[5] && pola[5] == pola[7])

        return 1;
	//remis
    else if (pola[1] != '1' && pola[2] != '2' && pola[3] != '3' 
                    && pola[4] != '4' && pola[5] != '5' && pola[6] != '6' 
                  && pola[7] != '7' && pola[8] != '8' && pola[9] != '9')

        return 0;
    else
        return -1;
}

void tablica(){
	// wykonanie planszy graficznej
	system("cls");
	cout << "\n\nKolko i krzyzyk\n\n" << endl;
	
	cout << "Gracz 1 (X) - Gracz 2 (O)"<< endl << endl;
	cout << endl;
	
	cout << "     |     |     " << endl;
    cout << "  " << pola[1] << "  |  " << pola[2] << "  |  " << pola[3] << endl;

    cout << "_____|_____|_____" << endl;
    cout << "     |     |     " << endl;

    cout << "  " << pola[4] << "  |  " << pola[5] << "  |  " << pola[6] << endl;

    cout << "_____|_____|_____" << endl;
    cout << "     |     |     " << endl;

    cout << "  " << pola[7] << "  |  " << pola[8] << "  |  " << pola[9] << endl;

    cout << "     |     |     " << endl << endl;
}
