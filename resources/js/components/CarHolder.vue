<template>
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Car Agents</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Expandable Table</h3>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-wrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td>Approved</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr class="expandable-body d-none">
                                            <td colspan="5">
                                                <p style="display: none;">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged. It was popularised in the 1960s with the
                                                    release
                                                    of Letraset sheets containing Lorem Ipsum passages, and more
                                                    recently
                                                    with desktop publishing software like Aldus PageMaker including
                                                    versions
                                                    of Lorem Ipsum.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>11-7-2014</td>
                                            <td>Pending</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr class="expandable-body">
                                            <td colspan="5">
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged. It was popularised in the 1960s with the
                                                    release
                                                    of Letraset sheets containing Lorem Ipsum passages, and more
                                                    recently
                                                    with desktop publishing software like Aldus PageMaker including
                                                    versions
                                                    of Lorem Ipsum.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>657</td>
                                            <td>Alexander Pierce</td>
                                            <td>11-7-2014</td>
                                            <td>Approved</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr class="expandable-body">
                                            <td colspan="5">
                                                <p>
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged. It was popularised in the 1960s with the
                                                    release
                                                    of Letraset sheets containing Lorem Ipsum passages, and more
                                                    recently
                                                    with desktop publishing software like Aldus PageMaker including
                                                    versions
                                                    of Lorem Ipsum.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td>Denied</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.
                                            </td>
                                        </tr>
                                        <tr class="expandable-body d-none">
                                            <td colspan="5">
                                                <p style="display: none;">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only
                                                    five
                                                    centuries, but also the leap into electronic typesetting, remaining
                                                    essentially unchanged. It was popularised in the 1960s with the
                                                    release
                                                    of Letraset sheets containing Lorem Ipsum passages, and more
                                                    recently
                                                    with desktop publishing software like Aldus PageMaker including
                                                    versions
                                                    of Lorem Ipsum.
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
