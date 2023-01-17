<div>
    <x-app-layout >
        <div class="" 
             x-data = "{
                tableau : [true,false,false,false,false,false],
                Afficher(nombre){
                    for(var i = 0;i < this.tableau.length;i++){
                        if(nombre == i){
                            this.tableau[i]=true;
                        }else{
                            this.tableau[i]=false;
                        }
                    }
                    console.log(this.tableau[nombre]);
                }
             }">
            <div class="" style="background: #2b3643;color:#ababab">
                <div class="p-4 border-b-2 border-black hover:bg-gray-400" @click="Afficher(0)">LIEU</div>
                <div class="p-4 border-b-2 border-black hover:bg-gray-400" @click="Afficher(1)">ACTIVITE</div>
                <div class="p-4 border-b-2 border-black hover:bg-gray-400" @click="Afficher(2)">SITE</div>
                <div class="p-4 border-b-2 border-black hover:bg-gray-400" @click="Afficher(3)">CONCTACT</div>    
                <div class="p-4 border-b-2 border-black hover:bg-gray-400" @click="Afficher(4)">CONDITION</div>    
                <div class="p-4 border-b-2 border-black hover:bg-gray-400" @click="Afficher(5)">DROIT ACTIVITE</div>    
            </div>
            <!-- Contenues de composants -->

            @livewireStyles
            <div>
                <div x-show="tableau[0]==true">
                    <h1>Lieu</h1>
                </div>
                 <div x-show="tableau[1]==true">
                    <livewire:admin.activite>
                 </div>
                 <div x-show="tableau[2]==true">
                    <livewire:admin.site>
                 </div>
                <div x-show="tableau[3]==true">
                    <livewire:admin.contact>
                </div>
                <div x-show="tableau[4]==true">
                    <livewire:admin.condition>
                </div>
                <div x-show="tableau[5]==true">
                    <livewire:admin.droit-activite>
                </div>
         </div>
            </div>
            @livewireScripts

                
    </x-app-layout>
</div> 
