/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package animal;

/**
 *
 * @author faycal
 */
public class Chat extends Animal{
    public Chat(String _nom){
        super(_nom);
        //System.out.println("constructeur Chat appelé");      
    }
    public String cri(){return "(Chat) : Miaulement";}
    
    
}
