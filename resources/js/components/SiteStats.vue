<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
            Laracast Stats
        </h1>

        <ul>
            <li><strong>Total Series:</strong> {{series}}</li>
            <li><strong>Total Lessons:</strong> {{lessons}}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                series: 0,
                lessons: 0
            }
        },
        created() {
            //axios.get('https://laracasts.test/api/stats')
            axios.get('/api/stats')
                .then( ({data}) => {
                    this.series     = data.series;
                    this.lessons    = data.lessons;
                });
        }
    }
</script>