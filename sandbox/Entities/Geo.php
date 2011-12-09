<?php

namespace Entities;

/**
 * @Entity
 * @Table(name="geo")
 */
class Geo
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="point", nullable=true)
     */
    private $point;

    /**
     * @Column(type="linestring", nullable=true)
     */
    private $linestring;

    /**
     * @Column(type="polygon", nullable=true)
     */
    private $polygon;

    /**
     * @Column(type="multipoint", nullable=true)
     */
    private $multipoint;

    /**
     * @Column(type="multilinestring", nullable=true)
     */
    private $multilinestring;

    /**
     * @Column(type="multipolygon", nullable=true)
     */
    private $multipolygon;

    /**
     * @Column(type="geometrycollection", nullable=true)
     */
    private $geometrycollection;

    public function getId()
    {
        return $this->id;
    }

    public function setPoint($point)
    {
        $this->point = $point;
    }

    public function getPoint()
    {
        return $this->point;
    }

    public function setLineString($linestring)
    {
        $this->linestring = $linestring;
    }

    public function getLineString()
    {
        return $this->linestring;
    }

    public function setPolygon($polygon)
    {
        $this->polygon = $polygon;
    }

    public function getPolygon()
    {
        return $this->polygon;
    }

    public function setMultiPoint($multipoint)
    {
        $this->multipoint = $multipoint;
    }

    public function getMultiPoint()
    {
        return $this->multipoint;
    }

    public function setMultiLineString($multilinestring)
    {
        $this->multilinestring = $multilinestring;
    }

    public function getMultiLineString()
    {
        return $this->multilinestring;
    }

    public function setMultiPolygon($multipolygon)
    {
        $this->multipolygon = $multipolygon;
    }

    public function geMultiPolygon()
    {
        return $this->multipolygon;
    }

    public function setGeometryCollection($geometrycollection)
    {
        $this->geometrycollection = $geometrycollection;
    }

    public function getGeometryCollection()
    {
        return $this->geometrycollection;
    }
}