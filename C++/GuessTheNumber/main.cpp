#include <cstdlib>
#include <time.h>
#include <iostream>
using namespace std;

int main(){
	//wprowadzenie ziarna losowej liczby
      srand(time(0));
      int number;
    //losowa liczba od 1-100
      number = rand() % 100 + 1;
      int guess;
    //zbieranie odpowiedzni i ich porównywanie
      do{
            cout << "Wprowadz liczbe: ";
            cin >> guess;
            if (guess < number)
                  cout << "Liczba jest za mala" << endl;
            else if (guess > number)
                  cout << "Liczba jest za duza" << endl;
            else
                  cout << "Poprawna odpowiedz" << endl;

      } while (guess != number);

      system("PAUSE");

      return 0;
}
