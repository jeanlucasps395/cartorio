<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inicio extends CI_Model {

  

    public function produtos_destaque(){
        $dados = array(
            'produto_destaque' => 1
        );
        return $this->db->get_where('produtos', $dados)->result_array();
        
    }

    public function categorias($pesquisa){

        return $this->db->query('
            SELECT  categorias.*, 
                    (select count(categoria) as quantidades from produtos where  produtos.categoria = categorias.id_categoria) as quantidade 
            FROM categorias
            WHERE nome LIKE "%'.$pesquisa.'%"  ORDER BY nome ASC '
        )->result_array();

    }

     public function produtos($id = null){
        // $dados = array( 'categoria' => $id );
        if($id !== null ){
            // return $this->db->get_where('produtos',$dados)->result_array();    
            return $this->db->query('SELECT  produtos.*, categorias.nome as nome_categoria FROM `produtos`
                                    inner join categorias
                                    on produtos.categoria = categorias.id_categoria
                                    where categoria = '.$id.' and  prod_ativo = 1
                                    order by valor ASC
                                    ')->result_array();
        }
        else{
            return $this->db->query('SELECT produtos.*, categorias.nome as nome_categoria FROM `produtos`
                                    inner join categorias
                                    on produtos.categoria = categorias.id_categoria
                                    where  prod_ativo = 1
                                    order by valor ASC
                                    ')->result_array();  
        }
        

    }


    function buscarProduto($id){
         return $this->db->query('SELECT produtos.*, categorias.nome as nome_categoria FROM `produtos`
                inner join categorias
                on produtos.categoria = categorias.id_categoria
                where id_produto = '.$id.'
                ')->row_array();
    }


    function verCidade($cidade){
        $this->db->like('nome',$cidade);
        return $this->db->get('cidadefretefree')->row_array();
    }    

    function frete(){
        // Frete interno
        $dados = array ('id_frete' => 1);
        return $this->db->get_where('frete',$dados)->row_array();
    }

    function frete_externo(){
        // Frete externo
        $dados = array ('id_frete' => 2);
        return $this->db->get_where('frete',$dados)->row_array();
    }


    // Sobre o pedido
    function cadastrarPedido($dados){
        $this->db->insert('pedidos',$dados);
        return $this->db->insert_id();
    }
    function atualizarPedido($dados,$id){
        $this->db->where('id_pedido',$id);
        return $this->db->update('pedidos',$dados);
    }


    function buscarPedido($id){
        return $this->db->get_where('pedidos',array('id_pedido' => $id))->row_array();
    }
    function valorProduto($id){
        $this->db->select('valor');
        return $this->db->get_where('produtos',array('id_produto' => $id))->row_array();
    }

    function buscarPedidoCode($code){
        return $this->db->get_where('pedidos',array('code_pedido_loc' => $code))->row_array();
    }

    function statusPedido($id){
        return $this->db->get_where('status_pedido',array('id_status_pedido' => $id))->row_array();
    }

     function buscarPedidoCodeOnlyCod($code){
        $this->db->select('code_pedido_loc, nome_titular, email');
        return $this->db->get_where('pedidos',array('id_pedido' => $code))->row_array();
    }




    // Informações de notificacao e pagamento
    public function atualizaNotificacao($dados){
        return $this->db->insert('notificacoes',$dados);
    }
    public function consultaNotificacao_assinatura($dados,$id){
        $this->db->where('email_usuario',$id);
        return $this->db->update('usuario',$dados);
    }
}