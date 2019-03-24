<?php 

  class FlipCard{
    
    protected $caminho;
    protected $alt;
    protected $titulo;
    protected $ano;
    protected $id;
    protected $cod;

    function flip($caminho, $titulo, $ano, $alt, $id){

      $this->setCaminho($caminho);
      $this->setTitulo($titulo);
      $this->setAlt($ano);
      $this->setAlt($alt);
      $this->setId($id);

      $c = $this->getCaminho();
      $t = $this->getTitulo();
      $an = $this->getAno();
      $a = $this->getAlt();
      $i = $this->getId();

      $flip = "


      <div class='flip-card'>
        <div class='flip-card-inner'>
          <div class='flip-card-front'>
            <img class='imgTamanho' src='$c' alt='$a'>
          </div>
          <div class='flip-card-back'>
            <div class='mt-5'>
              <h1>$t</h1>
              <h3><b>Ano: ".$ano."</b></h3>
              <button class='btn btn-outline-info' id='btnMais".$i."'>Saiba Mais</button>
            </div>
          </div>
        </div>
      </div> 

      ";

      return $flip;
    }

    function flipDecoracao($caminho, $titulo, $alt, $id){

      $this->setCaminho($caminho);
      $this->setTitulo($titulo);
      $this->setAlt($alt);
      $this->setId($id);

      $c = $this->getCaminho();
      $t = $this->getTitulo();
      $a = $this->getAlt();
      $i = $this->getId();

      $flip = "


      <div class='flip-card'>
        <div class='flip-card-inner'>
          <div class='flip-card-front'>
            <img class='imgTamanho' src='$c' alt='$a'>
          </div>
          <div class='flip-card-back'>
            <div class='mt-5'>
              <h1>$t</h1>
              <button class='btn btn-outline-info mt-2' id='btnMais".$i."'>Saiba Mais</button>
            </div>
          </div>
        </div>
      </div> 

      ";

      return $flip;
    }
	
	function flipLugares($caminho, $titulo, $alt, $id){

      $this->setCaminho($caminho);
      $this->setTitulo($titulo);
      $this->setAlt($alt);
      $this->setId($id);

      $c = $this->getCaminho();
      $t = $this->getTitulo();
      $a = $this->getAlt();
      $i = $this->getId();

      $flip = "


      <div class='flip-card'>
        <div class='flip-card-inner'>
          <div class='flip-card-front'>
            <img class='imgTamanho' src='$c' alt='$a'>
          </div>
          <div class='flip-card-back'>
            <div class='mt-5'>
              <h1>$t</h1>
              <button class='btn btn-outline-info mt-2' id='btnMais".$i."'>Saiba Mais</button>
            </div>
          </div>
        </div>
      </div> 

      ";

      return $flip;
    }
	
    function flipMusicas($caminho, $titulo, $ano, $alt, $id){

      $this->setCaminho($caminho);
      $this->setTitulo($titulo);
      $this->setAlt($ano);
      $this->setAlt($alt);
      $this->setId($id);

      $c = $this->getCaminho();
      $t = $this->getTitulo();
      $an = $this->getAno();
      $a = $this->getAlt();
      $i = $this->getId();

      $flip = "


      <div class='flip-card my-2'>
        <div class='flip-card-inner'>
          <div class='flip-card-front'>
            <img class='imgTamanho' src='$c' alt='$a'>
          </div>
          <div class='flip-card-back'>
            <div>
            <h1 class='mt-5'>$t</h1>
              <h3 class='my-5'><b>Ano: ".$ano."</b></h3>
              <button class='my-2 btn btn-outline-info' id='btnMais".$i."'>Saiba Mais</button>
            </div>
          </div>
        </div>
      </div> 

      ";

      return $flip;
    }

    // =================GETTERS e SETTERS==========================

    private function getCaminho(){
      return $this->caminho;
    }

    private function setCaminho($caminho){
      $this->caminho = $caminho;
    }

    private function getAlt(){
      return $this->alt;
    }

    private function setAlt($alt){
      $this->alt = $alt;
    }

    private function getTitulo(){
      return $this->titulo;
    }

    private function setTitulo($titulo){
      $this->titulo = $titulo;
    }

    private function getAno(){
      return $this->ano;
    }

    private function setAno($ano){
      $this->ano = $ano;
    }

    private function getId(){
      return $this->id;
    }

    private function setId($id){
      $this->id = $id;
    }

    private function getCod(){
      return $this->cod;
    }

    private function setCod($cod){
      $this->cod = $cod;
    }

    // =================Conteúdo==========================

    public function conteudoCarros($cod){
      $conteudo;
      $this->setCod($cod);

      $c = $this->getCod();

      switch ($c) {
        case '1':
          $conteudo = "<p>Por incrível que pareça esse modelo esportivo da Chevrolet teve certa rejeição pelo fabricante, quase interrompendo a sua produção. Inspirado nos carros esportivos europeus, porém, com uma pegada americanizada e um rabo de peixe discreto. Em primeiro momento foi fabricado em cores padrão (branco polo com o interior revestido em couro vermelho). Despertou grande interesse na época, por se tratar de um veículo de menor porte, diferente da realidade presente da década de 50. Possuía o diferencial de ser feito em fibra de vidro, ou seja, dando mais leveza ao veículo.</p>";
          break;

        case '2':
          $conteudo = '<p>Produzida de 1950 a 2013, é sem dúvidas, o veículo com mais histórias pra contar do que qualquer outro veículo. Além das histórias paralelas dos donos de Kombi, há também a principal história: de como a ela nasceu e evoluiu no decorrer do tempo. O conceito da Kombi surgiu do modelo do Fusca, mas, com multifunções!</p>';
        break;
        
        case '3':
          $conteudo = '<p>A Cadillac apresentava na década de 50 carros luxuosos, com longas dimensões e em suas mais variadas formas, porém, só em 1959 viria com o modelo ápice da marca. Com duas toneladas de peso, 6,1 metros de comprimento por 1,83 metro de largura e aletas de 1,07 metro de altura, o Eldorado 59 era sinônimo de luxo, riqueza e poder. Foi por causa deste modelo glamouroso, que houve o status “Cadillac dos anos 50”. Um verdadeiro marco automobilístico, unia conforto, velocidade e o famoso “rabo-de-peixe”.</p>'; 
        break;

        case '4':
          $conteudo = '<p>Na década de 60 o Impala era um dos carros mais vendidos e lembrados. Os modelos da época estavam visualmente sendo mais limpos, diferente dos modelos mais robustos que eram marca dos anos dourados. O modelo SS de 1961, já não apresentava mais asas traseiras e agora tinha o diferencial dos bancos individuais, câmbio no assoalho, conta-giros na coluna de direção e a opção do motor 409 V8, de 360 cv brutos. O Impala SS é um dos modelos mais famosos entre os Big Blocks (motores de bloco grande). Outro fato curioso é de que haviam sido produzidos 453 unidades desse modelo nas concessionárias, boa parte deles vendidos, misteriosamente eles foram recolhidos pela fábrica depois de alguns meses. Sendo assim, muitos não consideram o Impala de 61 como primeiro modelo e sim o de 62.</p>';
        break;

        case '5':
          $conteudo = '<p>O maior carro já produzido no Brasil e com raízes americanas (país sede da Ford). O nome é uma alusão a corrida espacial. Galaxie, que vêm da palavra inglesa galaxy, ou seja, galáxia em português. O número 500 é inspirado na vitória de 500 milhas de Daytona (1958). Os modelos da década de 60 tem como característica o motor V8 debaixo do capô. O modelo de 67 apresentava motor V8 272 de 164 cv, câmbio com três marchas, que proporcionava um rolar confortável mesmo nas ruas mau pavimentadas da época. Apresentava também cores com nomes galácticos (Vermelho Marte, Bege Terra, Verde Júpiter, Preto Sideral, Cinza Cósmico, Azul Infinito, Azul Ágena e Branco Glacial). Possuía as “supercalotas” que cobriam as rodas por completo (feitas em alumínio polido com os rebaixos pintados em preto fosco vinílico com o miolo em acrílico e o fundo refletido em vermelho). Um verdadeiro carro luxuoso, bancos inteiriços, porta malas enorme, meio-aro da buzina no volante, detalhes internos cromados, quebra-vento. Ainda não apresentava o famoso teto de vinil que seria incrementado nos anos seguintes e parte emblemática do Galaxie.</p>';
        break;

        case '6':
          $conteudo = '<p>Lançado em 19 de novembro de 1968, foi o primeiro carro de passageiros Chevrolet produzido no Brasil. Só saiu de linha em 1991, com a marca de quase 1 milhão de unidades produzidas. Em 1971 ele assumia a vice-liderança de vendas com 54.212 unidades vendidas.</p>';
        break;

        case '7':
          $conteudo = '<p>Foi criado em 1970 como um sedã barato de duas portas. O baixo preço era uma estratégia da Ford para competir com o Fusca e (nos Estados Unidos) contra os japoneses importados. Outro incentivo foram as duas crises do petróleo nos anos 70, que impulsionaram a demanda por carros mais econômicos. Já no primeiro ano as vendas ultrapassaram as do Mustang. Curiosamente, as primeiras edições do Maverick vinham sem porta-luvas, parte do carro que hoje ninguém considera mais acessório, quanto mais opcional. Em abril de 1979, após vender mais de 100.000 unidades, o Maverick saiu de linha de vez, sendo substituído pelo Ford Corcel II. </p>';
        break;

        case '8':
          $conteudo = '<p>Foi um automóvel produzido de 1973 até 1982 pela Volkswagen do Brasil. Foi projetado para aliar a robustez do Volkswagen Fusca, um carro consagrado no mercado, com o conforto de um automóvel com maior espaço interno e desenho mais contemporâneo. Era um carro pequeno, de linhas retas e grande área envidraçada. Esse nome é uma homenagem à então moderníssima cidade, fundada 13 anos antes com o mesmo nome.</p>';
        break;

        case '9':
          $conteudo = '<p>Ícone no mercado, foi o primeiro automóvel a ser fabricado pela marca alemã na década de 30, mas que começou de fato após a Segunda Guerra Mundial. O sucesso foi tão grande que em 72 chegou ao posto de mais vendido da história. No total, foram 23,9 milhões de carros.</p>';
        break;

        case '10':
          $conteudo = '<p>Se o objetivo de Doutor Brown em “De Volta Para o Futuro” era construir uma máquina do tempo a partir de um carro, ele conseguiu esse feito não só na elogiada trilogia, mas também fora das telonas o DeLorean fez tanto sucesso que foi capaz de atravessar décadas. Inclusive, em uma viagem de Marty McFly (Michael J. Fox) no segundo filme o protagonista cai no ano de 2015, talvez um prenúncio de que o veículo seria tão adorado a ponto de trinta anos depois, ser considerado por muita gente o principal carro da história do cinema. O modelo original usado para a trilogia é um DeLorean DMC-12 de 1981, cujo conceito foi pensado por um ex-executivo da General Motors, o engenheiro automotivo John Zachary DeLorean (o sobrenome explica muita coisa). Com um chassi feito de aço inoxidável, o DMC-12 tinha motor V6 de 2.85 litros, usado também em carros da Peugeot, Renault e Volvo. O desenho foi elaborado pelo italiano Giogetto Giugiaro, enquanto a engenharia do veículo ficou por conta da inglesa Lotus Cars. Os modelos DMC-12 eram todos feitos em uma fábrica em Dunmurray, na Irlanda do Norte. As portas que abriam para cima faziam parte do conceito original do carro, que tinha duas opções de transmissão: manual de cinco marchas ou automática com três. Cerca de 9200 modelos foram fabricados, com 6 mil rodando até hoje. Em 1995, a DMC anunciou seu retorno e a compra de todo o inventário de peças, possibilitando a manutenção desses DeLoreans que ainda rodam. O DeLorean clássico usado nos três filmes está exposto no Universal Studios Hollywood. O modelo das cenas de ação que envolvem o trem no terceiro filme está exposto no Universal Orlando. A terceira máquina do tempo, usada no terceiro filme e com os pneus de faixa branca, hoje está em mãos de um homem que vive em New England. Uma série de réplicas particulares já foi fabricada por grandes fãs da trilogia.</p>';
        break;

        case '11':
          $conteudo = '<p>GT Spyder Califórnia: Muitas Ferraris já tiveram o privilégio de aparecer em grandes filmes do cinema, mas poucas foram tão marcantes quanto a que ganhou as telonas em Curtindo a Vida Adoidado, filme de 1986. Na trama, Ferris (Broderick) convence Cameron (Alan Ruck) a pegar a Ferrari do pai emprestada, e que infelizmente seria destruída depois. O carro do filme é uma 250 GT Spyder Califórnia, lançada pela marca italiana em 1960 – a classe “250” da Ferrari foi produzida de 1953 a 1964. Porém, nem tudo foi gravado com Ferraris originais. De acordo com o diretor John Hughes, o veículo era caro demais para ser usado em cenas de destruição (o que faz muito sentido) e apenas tomadas de inserção (secundárias) contaram com uma Spyder Califórnia original. Três réplicas de fibra de vidro foram construídas pela Modena Design and Development, empresa californiana especializada na reprodução desse modelo. O motor de uma Spyder Califórnia original era um 3.0 V12 de 280cv, enquanto o da réplica mais utilizada nas filmagens era um Ford 4.7 V8 que chegava a 400cv. Essa réplica principal, inclusive, foi vendida por cerca de R$ 750 mil em 2013 – uma Ferrari original desse modelo foi vendida em um leilão este ano por um valor equivalente a R$ 52 milhões. E pensar que John Hughes chegou a pensar em um Porsche 911 Turbo para ser o carro do filme. Ainda bem que ele se encantou pela Spyder Califórnia e a escolheu para marcar a história dos veículos de cinema, ainda que tenha feito isso com réplicas.</p>';
        break;

        default:
          $conteudo = 'erro';
          break;
      }
      return $conteudo;
    }

    public function conteudoDecoracao($cod){
      $conteudo;
      $this->setCod($cod);

      $c = $this->getCod();

      switch ($c) {
        case '1':
          $conteudo = "<p>Escolher as peças para montar uma composição de estilo retrô não há regra. Na sala de estar deve-se investir em apenas um item, ele pode ser a mesa de centro, o sofá ou a estante que levará o ar retrô para o ambiente. Artigos com visual propositalmente envelhecido, de tons fortes e com design do passado são uma boa aposta. Os móveis característicos da tendência contam com pés palitos.</p>";
          break;

        case '2':
          $conteudo = '<p>Na cozinha, os eletrodomésticos e de estilo retrô dão um charme a mais ao ambiente com temáticas passadas. Por exemplo, porta-condimentos, batedeiras e chaleiras. As cortinas também são ideias para reforçar a temática da decoração no estilo retrô. Na composição mais delicada, investir em peças com estampas de poá ou flores. Para um cenário mais descontraído, as padronagens psicodélicas ou com ilustrações de personagens passados reforçarão a composição do espaço.</p>';
        break;
        
        case '3':
          $conteudo = '<p>No quarto é possível investir tanto no papel de parede escolhido para o ambiente, como nos móveis e adornos. Espelhos com molduras características da época também são peças ideais para compor dormitórios. Quadros com personalidades de décadas anteriores são outros acessórios perfeitos para elaborar uma decoração com estilo retrô.</p>'; 
        break;

        case '4':
          $conteudo = '<p>A decoração do banheiro deverá ter gabinetes com design no estilo retrô, ladrilhos adesivos que remetem ao passado e espelhos com moldura de décadas anteriores.</p>';
        break;

        case '5':
          $conteudo = '<p>Uma iluminação especial é outro ponto forte encontrado em decorações que seguem o estilo retrô feminino. Para isso, as tradicionais pisca-piscas de natal são ótimos recursos. Eles podem ser colocados ao redor de móveis, como na cabeceira da cama do quarto, da escrivaninha ou da moldura do espelho utilizado. Abajures com cúpulas delicadas também são bons exemplos de produtos que ajudam a oferecer iluminação na medida certa para a decoração que segue o estilo retrô feminino. Produtos com ilustrações em arabesco ou em tonalidades suaves podem mais facilmente entrar em harmonia com os demais artigos deixados na composição de estilo retrô feminino.</p>';
        break;

        case '6':
          $conteudo = '<p>Artigos que relembram tempos passados são os grandes destaques do estilo retrô. Pode ser uma placa decorativa, um quadro ou até pôster, o importante é que ele traga uma imagem que nos leve a viajar diretamente para décadas anteriores. Fotos de ídolos que marcaram época, como de Audrey Hepburn, Marilyn Monroe e Elvis Presley são alguns bons investimentos para reforçar a composição de estilo retrô.</p>';
        break;

        default:
          $conteudo = 'erro';
          break;
      }
      return $conteudo;
    }
	
	public function conteudoLugares($cod){
      $conteudo;
      $this->setCod($cod);

      $c = $this->getCod();

      switch ($c) {
        case '1':
          $conteudo = "<p>A Club Men Salon é uma barbearia gourmet, com decoração retrô, que tem como proposta oferecer serviços completos de estética exclusivamente para o público masculino. A rede conta com serviços como corte de cabelo, barba, hidratação capilar, coloração, escovas, pigmentação de barba, esfoliação facial, depilação, manicure e pedicure, massagens, entre outros.</p>
		  
		  
          <p>Endereço: Rua Alexandre Martins, n° 80 Loja 136 (Shopping Praiamar) – Aparecida Santos/ SP
          Telefone: (13) 2138-3854
          Site: http://www.sosmoveisantigos.com.br</p>";
          break;

        case '2':
          $conteudo = '<p>Cadillac Vintage Bar
          Casa temática centrada nas décadas de 50 e 60 possui música ao vivo, sanduíches especiais e ambiente animado.</p>

          <p><strong>Endereço:</strong> R. São Bento, 50 - Centro Histórico, Santos-SP</p>
          <p><strong>Telefone:</strong> (13) 3219-3606</p>
          <p><strong>WhatsApp:</strong> 13 9979.62001</p>
          <p><strong>Site:</strong> http://cadillacvintagebar.com</p>';
        break;
        
        case '3':
          $conteudo = '<p>A AlugaClássicos é a empresa de locação de carros clássicos e antigos ara sua festa de casamento, festa de debutante, inauguração, exposição, produção cinematográfica e campanhas publicitárias. Contando com mais de 50 automóveis próprios disponíveis para locação, tem a certeza de que um dos veículos clássicos e antigos suprirão as necessidades e desejos dos clientes.</p>
		  
		  
		      <p><strong>Site:</strong> http://www.alugaclassicos.com.br</p>
          <p><strong>WhatsApp:</strong> (21) 98273-8273</p>'; 
        break;

        case '4':
          $conteudo = '<p>A Disqueria dispões de discos de vinil novos e usados, fitas cassetes, revistas, HQ’s, mangás e livros. Recomendada para pessoas de variados gostos, a Disqueria é o típico lugar em que você entra e não consegue sair sem levar alguma coisa.</p>
		  
		  
          <p><strong>Endereço:</strong> Loja 3 e 4, Av. Conselheiro Nébias, 850 - Boqueirão, Santos-SP</p>
          <p><strong>Telefone:</strong> (13) 3232-4767</p>
          <p><strong>Facebook:</strong> https://www.facebook.com/disqueria.santos</p>';
        break;

        case '5':
          $conteudo = '<p>Moda feminina e acessórios retrô.</p>
		  
		  
           <p><strong>Endereço:</strong> R. Francisca C. Lotito 65 CEP: 06775-150 T.Serra/SP</p> 
           <p><strong>WhatsApp:</strong> 011953223459</p>
           <p><strong>Site:</strong> https://www.moderavintage.com.br</p>';
        break;

        case '6':
          $conteudo = '<p>Compra, venda, locação e restauração de móveis e acessórios. Peças exclusivas.  
		   Trabalhamos desde 1989 sempre com peças exclusivas.</p>
		  
		  
           <p><strong>Endereço:</strong> Rua Cardeal Arcoverde, 1301 - Pinheiros, São Paulo - SP</p>
           <p><strong>Telefone:</strong> 11 3034-2469 / 11 3812-0169 / 11 3814-1359</p>
           <p><strong>WhatsApp:</strong> (11) 98105-0015</p>
           <p><strong>Site:</strong> http://www.sosmoveisantigos.com.br</p>';
        break;
		
		case '7':
          $conteudo = '<p>Fast food. Lanches e sanduíches em um ambiente retrô.</p>
		  
		  
          <p><strong>Endereço:</strong> Praiamar Shopping</p>';
        break;

        case '8':
          $conteudo = "<p>A Vudu é uma pequena empresa, criada por dois designers que tinham dificuldade de encontrar roupas com uma 'pegada' rock'n'roll e vintage e por isso começaram a personalizar peças para uso próprio.
            Os amigos gostaram, pediram, começaram a indicar e a Vudu! nasceu dessa necessidade de usar roupas que não estão em vitrines de shopping. Desde 2008 criamos produtos inspirados em tatuagem old school, rock e na temática vintage.</p>
		  
		  
          <p><strong>Site:</strong> https://www.vuduloja.com</p>
          <p><strong>WhatsApp:</strong> 11 95273-3994</p>";
        break;

        default:
          $conteudo = 'erro';
          break;
	  }
	  
      return $conteudo;
    }
  
    public function conteudoMusicas($cod){
      $conteudo;
      $this->setCod($cod);

      $c = $this->getCod();

      switch ($c) {
        case '1':
          $conteudo = "<p>Os Bee Gees é uma banda pop formada por três irmãos, o mais velho Barry Gibb, e os gêmeos Robin e Maurice Gibb. Nascidos na Ilha de Man e, tendo pais ingleses, moraram apenas alguns anos em Chorlton, Manchester, Inglaterra. Os irmãos mudaram-se ainda crianças para Brisbane, Queensland, Austrália. Fazem sucesso desde 1966, sendo um dos quatro artistas que mais venderam discos no mundo em todos os tempos. Passaram por diversos ritmos musicais, do Rock psicodélico às baladas, passando pelo country e country rock, pelo rock, pela música disco, pelo R&B, pela música Romântica, terminando no pop rock moderno. Vendendo mais de 320 milhões de discos em todo mundo.
		  O álbum Saturday Night Ferver é a trilha sonora mais vendida de todos os tempos e o segundo álbum mais vendido da história, recorde batido apenas pelo álbum Thriller de Michael Jackson. São os artistas que mais colocaram músicas em filmes e telenovelas no mundo todo. São considerados uma das maiores bandas de todos os tempos e o trio mais duradouro da história da música mundial. Possuem mais de mil músicas compostas. No ano de 2009 voltaram a ativa e comemoram 50 anos de uma carreira de intenso sucesso e êxitos. São uma das bandas que mais arrecadaram em todos os tempos.</p>";
        break;

        case '2':
          $conteudo = "<p>Elvis Presley foi um  cantor e ator que ficou conhecido como o Rei do Rock ‘n’ Roll”. Muitos artistas defendem que existe a música, “antes” e a música “depois” de Elvis. Nascido em 8 de janeiro de 1935, em Tupelo, no Mississippi, Elvis Presley veio de uma origem muito humilde e se tornou um dos maiores nomes do rock. Em meados dos anos 50, ele já aparecia no rádio, na TV e no cinema. Em 16 de agosto de 1977, aos 42 anos, Elvis morreu de uma insuficiência cardíaca, causada por seu vício em remédios. Mesmo depois de sua morte, ele ainda é considerado um dos maiores símbolos do rock mundial.</p>";
        break;
        
        case '3':
          $conteudo = '<p>Richard Wayne Penniman (Macon, 5 de dezembro de 1932), mais conhecido por Little Richard, é um cantor, compositor e pianista dos Estados Unidos. Foi eleito pela Rolling Stone o 8º maior artista da música de todos os tempos. Em sua infância, na Geórgia, Little Richard cresceu ouvindo cantores arrebatados de gospel nas igrejas negras e isto influenciou seu modo de cantar.
		  Aprendeu a tocar piano na adolescência e se tornaria um dos desbravadores do rock, misturando boogie-woogie, rhythm & blues e música gospel, criando um estilo único: uma música agressiva, vibrante, intensa, tocada acelerada ao piano. Começou a gravar em 1955, estourando nas paradas com a canção Tutti Frutti (gravada também por Elvis Presley). Seguiram-se hits como Lucille, Keep a Knockin (cuja introdução de bateria influenciou o Led Zeppelin na canção Rock and Roll.</p>'; 
        break;

        case '4':
          $conteudo = '<p>Pink Floyd, uma das principais bandas do planeta. As músicas psicodélicas, o experimentalismo são marcas desta banda, que transformou o modo de "fazer" rock e marcou uma nova era na música, com o rock progressivo. A história do Pink Floyd iniciou-se no ano de 1965. Rick Wright, Roger Waters e Nick Mason estudavam arquitetura na Universidade Cambridge, em Londres, e resolveram formar uma banda e se aventurar em pequenos shows em pubs em Londres. O trio foi batizado de Sigma 6 e seu repertório inicial contava com covers de blues e folk. Pouco depois, eles resolvem aumentar os integrantes e Waters apresenta dois amigos da faculdade, Roger Keith (Syd Barret) e David Gilmour. O nome Pink Floyd, que nada mais é do que a junção dos nomes de dois bluesmen, Pink Anderson e Floyd Council, de quem Syd Barret era fã.
		  
          A grande sacada do Pink Floyd foi o uso de slides em suas apresentações. Durante o show, slides diversos eram projetados sobre todo o palco, uma iniciativa totalmente inovadora e que viria a ser adotada por diversas outras bandas, posteriormente. Syd Barret, que além de músico também era pintor, foi um dos principais responsáveis pelo projeto. O quarteto começava a ganhar maior visibilidade no cenário musical londrino e logo foram convidados a gravar alguns singles, que foram divulgados nas rádios. Mas a grande oportunidade veio com a contratação da banda pela gravadora EMI, que os levou para gravar no estúdio Abbey Road. Então em 1967 é lançado The Piper at the Gates of Down, que ocupa imediatamente as primeiras posições das paradas inglesas. 
		  
          Apesar de diversos projetos e lançamentos, o ápice do Pink Floyd aconteceria em 1973, com Dark Side of the Moon. É uma obra-prima sem precedência na história, que bateu e criou recordes diversos. Permaneceu por mais de 14 anos nas paradas americanas, figurou entre os 50 discos mais vendidos na Inglaterra por mais de dois anos e entre os 100 por mais de oito.  Animals (1977) foi um trabalho baseado no livro A Revolução dos Bichos, de George Orwell, que faz uma severa crí¬tica ao sistema capitalista. Após Dark Side of the Moon e Wish You Were Here, seria difícil imaginar que o Pink Floyd produzindo um trabalho melhor ou tão bom quanto os dois anteriores.
		  
		  Mas eis que em 1979 é lançado The Wall, trabalho altamente emblemático, que criticava o sistema de ensino da Inglaterra, além de retratar as fraquezas humanas. O sucesso do álbum foi arrasador. A produção da turnê foi uma das mais caras e grandiosas da história da música.  Não é preciso procurar muito para se observar as marcas deixadas pelo Pink Floyd no cenário musical. Das grandes produções às inventivas capas de CD, a banda exala arte por todos os lados. A complexidade, excelência, precisão e criatividade dos integrantes do Floyd, seja no processo de composição, seja na produção dos shows, estabeleceram técnicas e padrões musicais inovadores, que romperam com qualquer outro paradigma estabelecido e que são utilizados por diversas bandas da atualidade. O Pink Floyd é música, história e arte das melhores. </p>';
        break;

        case '5':
          $conteudo = '<p>The Beatles foi uma banda britânica, de rock, formada em Liverpool, cidade do noroeste da Inglaterra, que ficou famosa em todo o mundo e influenciou toda uma geração, movimento que a imprensa britânica chamou de Beatlemania.
          The Beatles foi formada em 1960, por 4 integrantes, John Lennon, Ringo Starr, Paul McCartney e George Harrison. A banda criada em 1957, inicialmente foi formada por John Lennon e seus colegas de escola, Peter Sholton, Erick Griffths, Bill Smith e Rod Davis. Em homenagem a escola Quarry Bank School, a banda recebeu o nome de The Quarrymen.

          Ainda em 1957, Paul MacCartney foi convidado a integrar a banda. Em 1958, foi a vez de George juntar-se ao grupo. Em 1960 a banda muda o nome para "The Beatles". Nesta época a banda não tinha baterista fixo. Em 1961, The Beatles realiza sua primeira apresentação no The Cavem Club, onde permaneceu tocando até 1963.
          Em 1962, assinaram contrato com o empresário Briam Epstein, que mudou o visual da banda, trocando as roupas de couro por trajes formais. Ainda este ano, Ringo Starr é convidado para baterista da banda. Em agosto a banda fez sua primeira apresentação com a formação definitiva, George, Paul, John e Ringo.
		  
          Em outubro de 1962, com a gravação de "Love Me Do", a banda participou do programa People and Places, transmitido ao vivo na TV Granada. No início de 1963 a banda estava em todas as paradas britânicas.

          Em 1964 a banda fez sua primeira apresentação em Nova Iorque, assistidos por uma multidão, a beatlemania se espalhava por vários países. Em 1965 a rainha Elizabeth II da Inglaterra, condecorou os Beatles com a Ordem do Império Britânico.

          Em 1965 a banda já lançava seu sexto álbum. Em 1966 a banda tira férias de três meses e, em março inicia uma turnê por cinco países, Alemanha, Filipinas, Japão, Estados Unidos e Canadá. Em 1967 o empresário morre e a banda entra em discórdia para escolher um novo empresário.

          Em 1969 o grupo grava seu penúltimo álbum "Abbey Road". Em setembro Lennon anunciou sua saída da banda. No dia 10 de abril de 1970, Paul anunciou para o público, o fim da Banda, uma semana antes do lançamento de seu primeiro álbum solo. O motivo do fim do grupo ainda é cercado de mistérios.</p>';
        break;

        case '6':
          $conteudo = '<p>A primeira aparição do grupo na mídia foi em 1964, com Michael Jackson e seus irmãos: Jackie, Tito, Jermaine e Marlon, que formavam o The Jackson Five. Em pouco tempo, com suas grandes performances, o grupo alcançou o topo das paradas. Em 1966, Michael Jackson, o mais novo dos irmãos, se tornou o vocalista e dançarino principal do conjunto. Sob a supervisão do pai, em 1968, o grupo assinou contrato com a Motown. O primeiro grande sucesso veio em 1969 com a música I Want You Back. Levados para Los Angeles foram transformados em astros mundiais. O grupo gravou 15 álbuns de sucesso.</p>';
        break;

        case '7':
          $conteudo = '<p>Os irmãos Angus e Malcolm foram apresentados ao rock and roll por George, seu irmão mais velho. Os dois tocaram em bandas separadamente até que no ano de 1973, quando resolveram formar o ACDC. A primeira formação da banda tinha Angus na guitarra solo, Malcolm na guitarra base, Colin Burgess na bateria, Van Knedt no baixo e Dave Evans no vocal, estreando no clube australiano Sydneys Chequers.

          Algum tempo depois que eles gravaram o primeiro single, ficou definido que o ex-motorista da banda, Bon Scott assumiria os vocais. De maneira impressionante, a formação da banda se movimentou diversas vezes até o lançamento do álbum "High Voltage" no ano de 1975.

          O AC/DC lançava um disco atrás do outro. Em 1975 era a vez de TNT, em 1976 Dirty Deeds Done Dirt Cheap e no ano de 1977 saiu Let There de Rock. Este último trouxe um dos clássicos da banda Whole Lotta Rosie. Tudo ia bem até que Mark, o então baixista, brigou com Angus e decidiu abandonar a banda.

          Com um novo baixista, Cliff Williams eles gravaram aqueles que são considerados os melhores álbuns do AC/DC. Em 1978, veio Powerage com músicas Gimme A Bullet. O álbum seguinte If You Want Blood Youve Got It foi uma coletânea de músicas gravadas em diferentes shows no ano de 1978.

          1979 foi ano que o ACDC surpreendeu o rock mundial. Highway to Hell foi bombástico para os amantes de rock O melhor álbum da banda trouxe sucesso e muitos boatos sobre um possível pacto deles com o diabo.

          Em 1980, o vocalista da banda Bon Scott foi encontrado morto no banco de trás do carro de um amigo. A banda ficou na dúvida, se deveria continuar ou não, mas acabaram seguindo em frente. Depois disso, eles lançaram mais de uma dezena de discos e continuaram fazendo turnês </p>';
        break;

        case '8':
          $conteudo = '<p>Elton John 1947 nasceu em Prinner, Middlesex, Inglaterra, no dia 25 de março de 1947. Filho de um trompetista de uma banda amadora logo cedo mostrou interesse pela música. Com 3 anos começou a tocar piano. Com sete anos iniciou seus estudos de música. Estudou na Pinner Country Grammar School e com 11 anos recebeu uma bolsa de estudos para a Royal Academy of Music.
          Em 1967, Elton John iniciou uma parceria com o letrista Bernie Taupin, e com ele lançou grande parte de sua obra musical e que lhe rendeu inúmeras premiações. Nesse mesmo ano, tentou o suicídio quando estava para se casar com uma mulher, mas descobriu que era gay. Elton abriu o gás do fogão de seu apartamento, mas se esqueceu de fechar as janelas da cozinha. Foi resgatado pelo parceiro Bernie Taupin. A experiência rendeu Someone Saved My Life Tonight 1975, uma das melhores canções de sua carreira. Em uma nova tentativa de suicídio engoliu vários comprimidos de tranquilizante e se jogou numa piscina.
          Elton John lançou seu primeiro CD em 1969, Emply Sky, que só foi lançado nos Estados Unidos, em 1975, depois de consolidada a sua carreira internacional. O sucesso da carreira veio com o lançamento do CD Your Song, cuja música de mesmo nome se tornou uma de suas mais famosas composições e consolidou a carreira do cantor.
          Entre os anos 80 e 90, a carreira de Elton John passou por certa estagnação, mas seus discos menos inspirados fizeram sucesso. Em 1994 criou Can You Feel the Love Tonight, que fez parte da trilha sonora do filme O Rei Leão, que lhe rendeu o Oscar de Melhor Canção em 1995. Em 1997, foi nomeado o Cavaleiro do Império Britânico pela Rainha Elizabeth II, recebendo o título de sir. O retorno ao sucesso veio em 2001, com Song From the West Coast, que retomava a sonoridade dos álbuns clássicos dos anos 70, como Tumbleweed Connection e Honky Chateau. Com 35 discos de ouro e 25 discos de platina, e aproximadamente 250 milhões de discos vendidos em todo o mundo.</p>';
        break;

        case '9':
          $conteudo = '<p>Em 1967, o guitarrista Brian May, o baixista e vocalista Tim Staffell e o baterista Roger Taylor formaram o trio Smile, no Imperial College em Londres, onde todos estudavam. Três anos depois, após a saída do baixista e vocalista do grupo, Tim Staffell, May e Taylor foram apresentados pelo próprio Staffell a um jovem rapaz chamado Farokh Bulsara. Não foi preciso cantar mais do que uma música para que Farokh convencer May e Taylor de que era a pessoa certa para assumir os vocais. Farokh Bulsara só precisa de um nome adequado para estar à frente de uma banda de rock. E assim nasceu Freddie Mercury, que ainda sugeriu que a banda mudasse o nome para Queen. Em 1971, John Deacon completou a formação do Queen como baixista.

          O Queen tornou-se rapidamente uma das bandas britânicas de rock mais importantes, tendo vendido mais de quatrocentos milhões de cópias no mundo inteiro. Seu auge aconteceu entre os anos de 1970 e 1980, sendo precursora do rock tal como hoje o conhecemos, com produções grandiosas dos seus concertos e videoclipes das canções. Mesmo nunca tendo sido levada a sério pelos críticos da sua época, que consideravam a sua música "comercial" (a crítica de hoje considera o Queen como uma das melhores bandas de rock de todos os tempos), a banda tornou-se uma das mais populares entre o público graças à mistura única entre as complexas e elaboradas apresentações ao vivo e o dinamismo e carisma da sua estrela maior, o vocalista Freddie Mercury.

          Com sua personalidade extravagante e teatral, Freddie Mercury sempre dominou o noticiário musical e criou algumas das canções mais famosas da banda. São composições de Mercury, por exemplo, Bohemian Rhapsody, Dont Stop Me Now, Somebody To Love, Love Of My Life e We Are The Champions. Mas os outros membros foram também responsáveis pela criação de grandes êxitos: Brian May compôs I Want It All, Who Wants To Live Forever, Tie Your Mother Down, Now Im Here, Dragon Attack, We Will Rock You. Roger Taylor assinou Radio Ga Ga, Calling all girls, Im In Love With My Car, A Kind Of Magic; John Deacon foi o responsável por Another One Bites The Dust, Need Your Loving Tonight, Youre My Best Friend, Spread Your Wings, One Year Of Love com a coautoria de Freddie Mercury e I Want To Break Free. Os membros da banda fizeram também músicas em conjunto, como Friends Will Be Friends composta por John Deacon e Freddie Mercury e Stone Cold Crazy todos os membros foram creditados como compositores, e também colaborações com outros artistas como no dueto em Under Pressure, que foi composta por Freddie Mercury e David Bowie. Mesmo após a morte de Freddie Mercury, em 24 de novembro de 1991, os membros da banda contribuíram coletivamente para as canções que o grupo compunha, por isso nos últimos álbuns da banda, todas as canções são assinadas pelo Queen, e não por apenas um compositor.</p>';
        break;

        case '10':
          $conteudo = '<p>Madonna 1958 é uma cantora, atriz e produtora musical norte-americana. É considerada uma das maiores pop stars desde a década de 80 e uma das grandes responsáveis pela mudança de comportamento social no final do século XX. Algumas músicas ficaram bastante conhecidas, entre elas: Like a Virgin, la Isla Bonita, Vogue, Hung up e 4 Minutes.
          Madonna Louise Ciccone (1958) nasceu em Bay City, Michigan, Estados Unidos, no dia 16 de agosto de 1958. Filha de família de origem italiana ficou órfã de mãe aos cinco anos de idade. Dava aulas de dança e piano. Recebeu uma bolsa para a Universidade de Michigan. Quando cursava o primeiro semestre, foi convidada para estudar dança em Nova York, para onde se mudou. Em Nova York, Madona chegou a trabalhar como garçonete e modelo. Foi convidada para trabalhar como backing vocal de Patrick Hernandez em sua apresentação nos Estados Unidos.
		  
          Em 1982, Madonna lançou seu primeiro single Everybody e o álbum Madonna. Mas foi com o álbum Like a Virgin que fez mais sucesso, ocupando a lista dos mais vendidos. No clip Material Girl, onde a cantora imitava Marilyn Monroe, mostrou seu lado performático. No ano de 1986, chegou ao auge da carreira com o álbum True Blue, que continha canções que foram sucesso: La Isla Bonita e Live to Tell. Em 1987, fez grande turnê intitulada Whos That Girl World Tour.
          Em 1989, o álbum Like a Prayer causou-lhe problemas por conta do clip da música homônima, sendo proibido pelo Vaticano e censurado em países católicos. Apesar disso, é um dos melhores no conjunto de sua discografia.
		  
          Em 1990, veio outra polêmica com o clip Justify my Love, onde mostrava cenas de sadomasoquismo. O vídeo Alcançou o número um na Billboard Hot 100. No mesmo ano, participou do filme Dick Tracy fazendo par com o ator Warren Beatty, com quem teve relacionamento amoroso.
          Em 1996, ganhou o Globo de Ouro atuando no filme Evita. Depois de alguns trabalhos sem expressão, lançou o álbum Ray of Light, considerado um dos melhores de sua carreira e, segundo a Revista Rolling Stone, um dos 500 melhores de todos os tempos.
          Durante a década de 2000, destacou-se o álbum Confessions on the Dance Floor, de 2005. Foi considerado o melhor no estilo dance eletrônico daquele ano no Grammy. A canção Hung up foi hit em 47 países. Seguiu-se o Hard Candy (2009), com influências de Hip Hop, sem o sucesso do álbum anterior. Em 2012, foi lançado o álbum MDNA, que levou a cantora a uma turnê pelos principais países, inclusive o Brasil. Em 2015, Madona lançou seu 13º álbum de estúdio Rebel Heart.</p>';
        break;

        case '11':
          $conteudo = '<p>Michael Jackson foi um cantor, compositor, dançarino e produtor musical. Chamado de Rei do Pop, Michael Jackson nasceu em Gary, Indiana, nos EUA, em 29 de agosto de 1958, de uma família afro-americana da classe trabalhadora. Seu pai, Joseph Jackson, trabalhava como operador de guindaste para sustentar sua família. Acreditando que seus filhos possuíam talento, ele formou um grupo no final dos anos 60, com Michael e seus irmãos, o Jackson 5. Michael era o cantor principal e impressionava as plateias com seu talento e sua voz de grande alcance. Com sua carreira solo, Michael se tornou uma das maiores estrelas pop de todos os tempos. Em 2009, sua morte gerou controvérsia e foi, posteriormente, considerada homicídio por parte de seu médico.</p>';
        break;
		
		case '12':
          $conteudo = '<p>The Police é uma banda de rock da década de 80, que apesar de ter durado menos de uma década é considerada uma das melhores bandas da época. A banda lançou seu primeiro álbum em 1977, já com o nome de "The Police". O primeiro single, "Fall Out" foi lançado por um selo independente chamado Illegal Records, que pertencia ao baterista da banda Stewart Copeland e seu irmão Miles, empresário do Police.

          A banda teve algumas formações, mas foi Sting no vocal e baixo, Andy Summers na guitarra e Stewart Copeland na bateria que eles chegaram ao sucesso. Em 1978, quando assinou com a gravadora A&M, eles lançaram o single "Roxanne", que na época não obteve muito sucesso. O que foi diferente com o próximo single, Cant Stand Losing You, que conseguiu ficar entre os 50 mais tocados.

          No mesmo ano veio o álbum Outlandos dAmour que levou a banda ao topo das paradas americanas e inglesas. Sabendo que a na época, a música tinha sido perdida, a gravadora e a banda resolveram relançar Roxanne que acabou se tornando um verdadeiro clássico do rock oitentista.

          Depois disso, em 1981, surgiu o álbum Ghost in the Machine gravado em estúdio. A faixa-título tornou-se hit, chegando a ficar em primeiro lugar na Inglaterra e em segundo nos EUA. Every Little Thing She Does is Magic foi uma faixa de sucesso e neste ano a banda colheu o sucesso do álbum anterior em premiações como a Brit Awards e o Grammy.

          Em 1982 o The Police fez um intervalo, tocando apenas em grandes shows e estádios. Os membros da banda desenvolveram atividades paralelas nesse período com música, produção e até mesmo cinema.

          No ano seguinte, eles voltaram com a música Synchronicity, que já entrou nas paradas britânicas em primeiro lugar. A balada Every Breath You Take foi responsável por grande parte deste sucesso. Após essa turnê a banda resolveu dar um tempo para dar seguimento a outros projetos individuais. As vezes, eles se reúnem para shows e pequenos especiais.</p>';
        break;

        default:
          $conteudo = 'erro';
          break;
      }
      return $conteudo;
    }
	
}	
	
?>
