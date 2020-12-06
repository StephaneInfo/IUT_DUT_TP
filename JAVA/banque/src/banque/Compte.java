/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package banque;

/**
 *
 * @author p1514542
 */
class Compte{
    int numero;
    String nom;
    double solde;
    static int compteur=0;

    public Compte(String parNom, double parSolde){
       numero= ++compteur;
        solde = parSolde;
        nom = parNom;
    }
    public void Deposer(double parSomme){
        solde+= parSomme;
    }
    void Retire(double parSomme){
            solde-=parSomme;
        }
    public String toString(){
            return "  numéro de compte : "+numero+" %% Nom du titulaire : "+nom+" %% Solde du compte : "+solde;
        }
}