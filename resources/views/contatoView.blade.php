<section>
    <form action="{{url('/contato/inserir')}}" method="post">
        {{csrf_field()}}
        <div>
            <input type="text" name="txNome" placeholder="Nome" value="" />
        </div>

        <div>
            <input type="text" name="txEmail" placeholder="E-mail" value="" />
        </div>

        <div>
            <input type="text" name="txFone" placeholder="Telefone" value="" />
        </div>

        <div>
            <input type="text" name="txAssunto" placeholder="Assunto" value="" />
        </div>

        <div>
            <input type="text" name="txMensagem" placeholder="Mensagem" value="" />
        </div>

        <div>
            <input type="submit" value="Enviar" />
        </div>
    </form>

</section>
