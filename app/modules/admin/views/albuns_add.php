<?php

echo form_open_multipart('admin/albuns/add', array('role'=>'form'));

echo div(array('class'=>'form-group'));
echo form_label('Título do álbum', 'titulo');
echo form_input(array('name'=>'titulo', 'value'=> set_value('titulo'), 'class'=>'form-control'));
echo form_error('titulo');
echo close_div();

echo div(array('class'=>'form-group'));
echo form_label('Descrição', 'descricao');
echo form_textarea(array('name'=>'descricao', 'value'=> set_value('descricao'), 'class'=>'form-control', 'rows'=>'5'));
echo form_error('descricao');
echo close_div();

echo row();
echo col(4);
echo div(array('class'=>'form-group'));
echo form_label('Imagem de capa', 'userfile');
echo form_input(array('name'=>'userfile', 'type'=>'file'));
echo close_div(2);

// Opções de status
$options = array(
                  '0'  => 'Indisponível',
                  '1'  => 'Publicado'
                );

echo col(3);
echo div(array('class'=>'form-group'));
echo form_label('Status', 'status');
echo form_dropdown('status', $options, null, null, 'form-control');
echo close_div(3);

echo hr();

echo row();
echo col();
echo form_button(
        array(
          'type'=>'submit', 
          'name'=>'submit', 
          'content'=>'Cadastrar', 
          'class'=>'btn btn-primary'
          )
        );
echo nbs(); // &nbsp;
echo anchor('admin/albuns', 'Cancelar', array('class'=>'btn btn-danger'));
echo close_div(2);

echo form_close();