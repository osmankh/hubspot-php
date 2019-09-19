<?php

namespace SevenShores\Hubspot\Resources;

class Template extends Resource
{
    /**
     * Create new template.
     *
     * @param array $params Optional parameters
     * @return \SevenShores\Hubspot\Http\Response
     */
    function create($params = [])
    {
        $endpoint = "https://api.hubapi.com/content/api/v2/templates";

        $options['json'] = json_encode($params);

        return $this->client->request('post', $endpoint, $options);
    }
}
