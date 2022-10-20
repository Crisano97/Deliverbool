<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form>
                        <div class="form-group">
                            <label for="input-email">Indirizzo email</label>
                            <input type="email" name="email" id="input-email" class="form-control" placeholder="inserisci email">
                        </div>
                        <div class="form-group">
                            <label for="input-name">Nome</label>
                            <input type="name" name="name" id="input-name" class="form-control" placeholder="inserisci nome">
                        </div>
                        <div class="form-group">
                            <label for="input-message">Messaggio</label>
                            <textarea name="message" id="input-message" cols="30" rows="10" placeholder="inserisci messaggio"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>