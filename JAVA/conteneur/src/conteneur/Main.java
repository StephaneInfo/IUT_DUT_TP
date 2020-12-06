/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package conteneur;

/**
 *
 * @author p1514542
 */

class Conteneur{
    static int compteur = 0;
    int numConteneur;
    int poids;
    int volume;
    int poidsMax=28;
    int volumeMax=33;
    
    public Conteneur(){
        numConteneur= compteur++;
    } 
      
    
    public Conteneur(int paraCapac, int paraVol){
        poidsMax=paraCapac;
        volumeMax=paraVol;
        numConteneur=compteur++;
    }
    
    static public int GetCompteur(){
        return compteur;
    }
    
    public void SommeTotale(Conteneur tab, int borne){
        for(int i=0;i<borne;i++){
            
        }
    }
    
    
    public void Chargement(Conteneur tab,int vol, int borne){
        for(int i=0;i<borne;i++){
            if(tab[i].EstRempli()){
                System.out.println("charge remplie dans conteneur n° "+ tab[i].GetNumConteneur());
                String toString(){
                    return("le conteneur n°"+ tab[i].GetNumConteneur() +" poids restants : "+  tab[i].PoidsRestant() +" volume restant :"+ tab[i].VolumeRestant());
                }
            }
            else{
                System.out.println("Dépassement de charge pour conteneur n° : "+tab[i].GetNumConteneur());
            }
        }
        if(vol!=0){
            System.out.println("Aucun conteneur disponible pour cette charge");
        }
    }

    public boolean EstRempli(){
        if(poids==poidsMax || volume==volumeMax){
            return true;
        } 
        else {
            return false;
        } 
    }
    
    public boolean Ajouter(int volAjout, int poidsAjout){
        if((poids+poidsAjout)<poidsMax || (volume+volAjout)<volumeMax){
            poids+=poidsAjout;
            volume+=volAjout;
            return true;
        }
        else{
            return false;
        }
    }
    
    public int PoidsRestant(){
        return poidsMax-GetPoids();
    }
    
    public int VolumeRestant(){
        return volumeMax-GetVolume();
    }
    
    public int GetPoids(){
        return poids;
    }
    
    public int GetVolume(){
        return volume;
    }
    
    public int GetNumConteneur(){
        return numConteneur;
    }
    
    public Conteneur AjoutConteneur(Conteneur conteTemp){
        
    }
}
    
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    }
    
}
